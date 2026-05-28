<?php
/**
 * Plugin Name: HaveMyBurger Setup
 * Description: Activates the HaveMyBurger theme and sets site title on first request.
 */

declare(strict_types=1);

add_action(
	'after_setup_theme',
	static function (): void {
		if ( get_option( 'havemyburger_setup_done' ) ) {
			return;
		}

		if ( wp_get_theme( 'havemyburger' )->exists() ) {
			switch_theme( 'havemyburger' );
		}

		update_option( 'blogname', 'HaveMyBurger Hotel' );
		update_option( 'blogdescription', 'Boutique Luxury Stay' );
		update_option( 'havemyburger_setup_done', true );
	},
	1
);
