<?php
/**
 * Plugin Name: Uluwatu Cliff Villa Setup
 * Description: Activates the uluwatu-villa theme on first request.
 */

declare(strict_types=1);

add_action(
	'after_setup_theme',
	static function (): void {
		$flag = 'uluwatu-villa_setup_done';
		if ( get_option( $flag ) ) {
			return;
		}

		if ( wp_get_theme( 'uluwatu-villa' )->exists() ) {
			switch_theme( 'uluwatu-villa' );
		}

		update_option( 'blogname', 'Uluwatu Cliff Villa' );
		update_option( 'blogdescription', 'Luxury 3-bedroom cliffside villa in Uluwatu, Bali' );
		update_option( $flag, true );
	},
	1
);
