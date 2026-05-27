<?php
/**
 * Plugin Name: HaveMyBurger Theme Activator
 * Description: Force-activates the HaveMyBurger theme on every request so the
 *              landing page is served on a fresh WordPress install without
 *              needing wp-admin access. Lives in mu-plugins so it loads
 *              automatically and cannot be deactivated by mistake.
 * Version: 1.0.0
 * Author: HaveMyBurger
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'pre_option_template',   'havemyburger_force_template'   );
add_filter( 'pre_option_stylesheet', 'havemyburger_force_template'   );
add_filter( 'pre_option_blogname',   'havemyburger_force_blogname'   );
add_filter( 'pre_option_blogdescription', 'havemyburger_force_tagline' );

function havemyburger_force_template( $value ) {
	$theme_dir = WP_CONTENT_DIR . '/themes/havemyburger';
	if ( is_dir( $theme_dir ) && file_exists( $theme_dir . '/style.css' ) ) {
		return 'havemyburger';
	}
	return $value;
}

function havemyburger_force_blogname( $value ) {
	if ( empty( $value ) || preg_match( '~cloudwaysapps\.com$~i', (string) $value ) ) {
		return 'HaveMyBurger Hotel';
	}
	return $value;
}

function havemyburger_force_tagline( $value ) {
	if ( empty( $value ) || $value === 'Just another WordPress site' ) {
		return 'Boutique stay where comfort meets character.';
	}
	return $value;
}
