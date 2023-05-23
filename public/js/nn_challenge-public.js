(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	
	$(document).ready(function() {
		var score = 0;
		var round = 1;

		$('.unit').click(function() {
			var selectedUnit = $(this).data('unit');
			var units = ['cavalry', 'archers', 'pikemen'];
			var computerUnit = units[Math.floor(Math.random() * units.length)];

			var result = getBattleResult(selectedUnit, computerUnit);

			if (result === "draw") {
				$('#result').html(`Round: ${round} - It's a draw!`);
			} else if (result === "player") {
				score++;
				$('#result').html(`Round: ${round} - Player wins!`);
			} else {
				score--;
				$('#result').html(`Round: ${round} - Computer wins!`);
			}

			$('#score').html("Score: Player " + score + " / Computer " + (-score));
			round++;

			if (round > 20) {
				var winner = (score > 0) ? 'Player' : 'Computer';
				$('#result').html("Game over! Final scores: Player " + score + " - Computer " + (-score) + ". " + winner + " wins!");
				$('.unit').prop('disabled', true);
			}
		});

		function getBattleResult(playerUnit, computerUnit) {
			if (playerUnit === computerUnit) {
				return "draw";
			} else if ((playerUnit === 'cavalry' && computerUnit === 'archers') ||
				(playerUnit === 'archers' && computerUnit === 'pikemen') ||
				(playerUnit === 'pikemen' && computerUnit === 'cavalry')) {
				return "player";
			} else {
				return "computer";
			}
		}
	});
})( jQuery );
