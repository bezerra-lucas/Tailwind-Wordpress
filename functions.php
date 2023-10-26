<?php

/**
 * Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base_Theme
 */


if (!defined('_S_VERSION')) {
    define('_S_VERSION', time());
}

function files()
{
    wp_enqueue_style('base-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'files');
