<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://https://github.com/manishofficial
 * @since      1.0.0
 *
 * @package    Nn_challenge
 * @subpackage Nn_challenge/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Nn_challenge
 * @subpackage Nn_challenge/public
 * @author     Manish Kumar <developermanishhub@gmail.com>
 */
class Nn_challenge_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nn_challenge_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nn_challenge_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/nn_challenge-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nn_challenge_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nn_challenge_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/nn_challenge-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_shortcodes()
    {
        add_shortcode('nn_challenge', [$this, 'nn_challenge_shortcode']);
    }

	public function nn_challenge_shortcode()
	{
		ob_start();
			require_once plugin_dir_path(__FILE__) . 'partials/nn_challenge-public-display.php';
		return ob_get_clean();
	}
}
