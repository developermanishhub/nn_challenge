<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://https://github.com/manishofficial
 * @since      1.0.0
 *
 * @package    Nn_challenge
 * @subpackage Nn_challenge/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="nn_challenge_container">
    <h1>Player vs Computer Mini-Game</h1>
    <div id="score">Score: Player 0 / Computer 0</div>
    <div id="battlefield">
        <h2>Select a unit:</h2>
        <button class="unit" data-unit="cavalry">Cavalry</button>
        <button class="unit" data-unit="archers">Archers</button>
        <button class="unit" data-unit="pikemen">Pikemen</button>
    </div>
    <div id="result"></div>
</div>