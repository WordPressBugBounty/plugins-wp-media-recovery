<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

function mlr_add_settings_menu() {
	$mlr = new Media_Library_Recovery();

	if ( '' === $mlr->compact_mode ) {
		add_submenu_page(
			'mlr_media_explorer',
			esc_html__( 'Options', 'wp-media-recovery' ),
			null,
			'manage_options',
			MLR_SETTINGS_SLUG,
			__NAMESPACE__ . '\mlr_display_settings_page'
		);
	} else {
		add_submenu_page(
			'upload.php',
			esc_html__( 'Options', 'wp-media-recovery' ),
			null,
			'manage_options',
			MLR_SETTINGS_SLUG,
			__NAMESPACE__ . '\mlr_display_settings_page'
		);
	}
}

add_action( 'admin_menu', __NAMESPACE__ . '\mlr_add_settings_menu', 1000 );
