<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/manishofficial
 * @since             1.0.0
 * @package           Nn_challenge
 *
 * @wordpress-plugin
 * Plugin Name:       nn challenge
 * Plugin URI:        https://https://kodeknack.com/nn_challenge
 * Description:       Simple player vs computer mini-game
 * Version:           1.0.0
 * Author:            Manish Kumar
 * Author URI:        https://https://github.com/manishofficial
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nn_challenge
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NN_CHALLENGE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nn_challenge-activator.php
 */
function activate_nn_challenge() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nn_challenge-activator.php';
	Nn_challenge_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nn_challenge-deactivator.php
 */
function deactivate_nn_challenge() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nn_challenge-deactivator.php';
	Nn_challenge_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nn_challenge' );
register_deactivation_hook( __FILE__, 'deactivate_nn_challenge' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nn_challenge.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nn_challenge() {

	$plugin = new Nn_challenge();
	$plugin->run();

}
run_nn_challenge();
