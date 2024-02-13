<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package store-theme
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function store_theme_styles()
{
	wp_enqueue_style(
		'store-theme-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);
}

function mytheme_enqueue_google_fonts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&family=Jaldi:wght@400;700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap', false);
}



add_action('wp_enqueue_scripts', 'store_theme_styles', 'mytheme_enqueue_google_fonts');
