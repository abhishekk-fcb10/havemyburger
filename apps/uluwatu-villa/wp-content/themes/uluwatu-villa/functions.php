<?php
/**
 * Uluwatu Cliff Villa theme setup.
 */

declare(strict_types=1);

function uluwatu_villa_enqueue_assets(): void {
	wp_enqueue_style(
		'uluwatu-villa-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap',
		[],
		null
	);
	wp_enqueue_style(
		'uluwatu-villa-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[ 'uluwatu-villa-fonts' ],
		'1.0.0'
	);
	wp_enqueue_script(
		'uluwatu-villa-main',
		get_template_directory_uri() . '/assets/js/main.js',
		[],
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'uluwatu_villa_enqueue_assets' );

add_filter( 'show_admin_bar', '__return_false' );

function uluwatu_villa_theme_support(): void {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'uluwatu_villa_theme_support' );
