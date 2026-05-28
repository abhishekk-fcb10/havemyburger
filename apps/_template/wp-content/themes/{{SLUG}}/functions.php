<?php
/**
 * {{NAME}} theme setup.
 */

declare(strict_types=1);

function {{SLUG_SNAKE}}_enqueue_assets(): void {
	wp_enqueue_style(
		'{{SLUG}}-style',
		get_template_directory_uri() . '/style.css',
		[],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', '{{SLUG_SNAKE}}_enqueue_assets' );

add_filter( 'show_admin_bar', '__return_false' );

function {{SLUG_SNAKE}}_theme_support(): void {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', '{{SLUG_SNAKE}}_theme_support' );
