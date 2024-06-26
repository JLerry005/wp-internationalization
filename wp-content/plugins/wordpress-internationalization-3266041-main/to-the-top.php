<?php
/*
 * Plugin Name:       To the Top
 * Description:       Adds a 'back to top' link
 * Version:           0.0.1
 * Requires at least: 6.2
 * Requires PHP:      8.0
 * Author:            Carrie Dils
 * Author URI:        https://carriedils.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       to-the-top
 * Domain Path:       /languages
 */

function ttt_add_link() {

	// Define the 'back to top' link text.
	$link_text = __( 'Back to top (PHP)', 'to-the-top' );

	// Output the 'back to top' link.
	printf( '<a href="#" id="to-the-top">%s</a>', $link_text );
}
add_action( 'wp_footer', 'ttt_add_link' );

function ttt_load_scripts() {
	wp_enqueue_script( 'to-the-top-js', plugin_dir_url(__FILE__) . 'js/to-the-top.js', array( 'wp-i18n', 'jquery' ) );
	wp_enqueue_style('css',plugin_dir_url( __FILE__ ).'css/style.css','1','all');     

}
add_action( 'wp_enqueue_scripts', 'ttt_load_scripts' );

// Load PHP translation files.
function ttt_load_php_translation() {
	load_plugin_textdomain( 'to-the-top', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
add_action( 'init', 'ttt_load_php_translation' );

// Load JS translation files.
function ttt_load_js_translation() {
	wp_set_script_translations( 'to-the-top-js', 'to-the-top', plugin_dir_path( __FILE__ ) . '/languages' );
}
add_action( 'wp_enqueue_scripts', 'ttt_load_js_translation', 100 );
