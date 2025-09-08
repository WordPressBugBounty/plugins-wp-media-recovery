<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.7
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

function mlr_add_media_explorer_menu() {
	$mlr = new Media_Library_Recovery();

	if ( '' === $mlr->compact_mode ) {
		add_menu_page(
			esc_html__( 'Media Recovery', 'wp-media-recovery' ),
			esc_html__( 'Media Recovery', 'wp-media-recovery' ),
			'manage_options',
			MLR_MEDIA_EXPLORER_SLUG,
			__NAMESPACE__ . '\mlr_display_media_explorer_page',
			'dashicons-image-rotate',
			5.5555
		);
	} else {
		add_submenu_page(
			'upload.php',
			esc_html__( 'Media Recovery', 'wp-media-recovery' ),
			esc_html__( 'Media Recovery', 'wp-media-recovery' ),
			'manage_options',
			MLR_MEDIA_EXPLORER_SLUG,
			__NAMESPACE__ . '\mlr_display_media_explorer_page'
		);
	}
}

add_action( 'admin_menu', __NAMESPACE__ . '\mlr_add_media_explorer_menu', 1000 );
