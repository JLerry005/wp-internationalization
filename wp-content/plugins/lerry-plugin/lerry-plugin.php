<?php 

/**
 * PLugin Name: Lerry Plugin
 * Text Domain: lerry-plugin 
 */

$plugin_rel_path = dirname( plugin_basename(__FILE__ ) ) . '/languages';

load_plugin_textdomain('text-domain', false, $plugin_rel_path);


$greetings = 'Hello';

// echo $greetings;

// DOUBLE UNDERSCORE FUNCTION
$greeting = __('Hello', 'lerry-plugin');

// E UNDERSCORE FUNCTION
_e('Hello', 'lerry-plugin');


$user = 'Lerry';
$number = 99; 

$greet = sprintf("Hello, %s! You're employee %d", $user, $number);

// var_dump($greet);
// echo $greet;

echo sprintf( __('Hello, %s! You are employee %d', 'lerry-plugin'), $user, $number);
