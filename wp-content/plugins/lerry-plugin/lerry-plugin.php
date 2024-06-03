<?php
/*
 * Plugin Name:       Lerry Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Back to top CTA
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Lerry
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/lerry-plugin/
 * Text Domain:       lerry-plugin
 * Domain Path:       /languages
 */

function btk_add_link( ) {

    // Define the 'back to top' button text.
    $link_text = __('Back to top', 'lerry-plugin');

    // Output the 'back to top' link.
    printf('<a href="#" id="to-the-top">%s</a>', $link_text);

}
add_action('wp_footer', 'btk_add_link');

function btk_add_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'script_js', plugin_dir_url(__FILE__) . 'enqueue/js/script.js', array( 'wp-i18n', 'jquery'), '1,0', true );

    wp_enqueue_style('style_css', plugin_dir_url(__FILE__) . 'enqueue/css/style.css', '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'btk_add_scripts');


// Load PHP translation files.
function btk_load_php_translation() {
    load_plugin_textdomain('lerry-plugin', false, dirname( plugin_basename(__FILE__))  . '/languages/');
}
add_action('init', 'btk_load_php_translation');

// Load JS translation files.
function btk_load_js_translation() {
    wp_set_script_translations('script_js', 'lerry-plugin', plugin_dir_path(__FILE__) . '/languages/');
};
add_action('wp_enqueue_scripts', 'btk_load_js_translation', 100);