<?php
/**
 * HaveMyBurger theme setup.
 */

declare(strict_types=1);

function havemyburger_enqueue_assets(): void {
	wp_enqueue_style(
		'havemyburger-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap',
		[],
		null
	);
	wp_enqueue_style(
		'havemyburger-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[ 'havemyburger-fonts' ],
		'1.0.0'
	);
	wp_enqueue_script(
		'havemyburger-main',
		get_template_directory_uri() . '/assets/js/main.js',
		[],
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'havemyburger_enqueue_assets' );

add_filter( 'show_admin_bar', '__return_false' );

function havemyburger_theme_support(): void {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'havemyburger_theme_support' );
