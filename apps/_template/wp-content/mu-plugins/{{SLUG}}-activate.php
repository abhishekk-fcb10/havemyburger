<?php
/**
 * Plugin Name: {{NAME}} Setup
 * Description: Activates the {{SLUG}} theme on first request.
 */

declare(strict_types=1);

add_action(
	'after_setup_theme',
	static function (): void {
		$flag = '{{SLUG}}_setup_done';
		if ( get_option( $flag ) ) {
			return;
		}

		if ( wp_get_theme( '{{SLUG}}' )->exists() ) {
			switch_theme( '{{SLUG}}' );
		}

		update_option( 'blogname', '{{NAME}}' );
		update_option( 'blogdescription', '{{DESCRIPTION}}' );
		update_option( $flag, true );
	},
	1
);
