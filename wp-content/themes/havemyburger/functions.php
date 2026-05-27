<?php
/**
 * HaveMyBurger theme bootstrap.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'havemyburger_setup' ) ) {
	function havemyburger_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'havemyburger_setup' );

function havemyburger_enqueue_assets() {
	$theme_uri  = get_template_directory_uri();
	$theme_path = get_template_directory();
	$style_path = $theme_path . '/assets/css/style.css';
	$script_path = $theme_path . '/assets/js/main.js';

	wp_enqueue_style(
		'havemyburger-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'havemyburger-style',
		$theme_uri . '/assets/css/style.css',
		array( 'havemyburger-fonts' ),
		file_exists( $style_path ) ? filemtime( $style_path ) : '1.0.0'
	);

	wp_enqueue_script(
		'havemyburger-main',
		$theme_uri . '/assets/js/main.js',
		array(),
		file_exists( $script_path ) ? filemtime( $script_path ) : '1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'havemyburger_enqueue_assets' );
