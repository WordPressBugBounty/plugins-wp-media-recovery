<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2024, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

/**
 * [AJAX] Recover selected media available for recovery.
 */
function mlr_recover_media() {
	$mlr       = new Media_Library_Recovery;
	$mlr_admin = new MLR_Admin;

	$mlr_admin->get_invalid_nonce_token();
	$mlr_admin->get_invalid_user_cap();

	$image_files = array_map( 'sanitize_text_field', json_decode( stripslashes( $_REQUEST['image_files'] ), true ) );

	if ( is_array( $image_files ) ) {
		foreach ( $image_files as $image_file ) {
			$mlr->rebuild_media_file( $image_file );
		}

		$mlr_admin->print_json_message(
			1,
			/* translators: %1$s is replaced with media item(s)! */
			/* translators: %2$s is replaced with Media Library */
			__( 'You have successfully recovered %1$s! Go to your %2$s to view the newly recovered files.' ),
			array(
				'<em>' . esc_html( sizeof( $image_files ) . ' image(s)', 'media-library-recovery' ) . '</em><br />',
				'<a href="' . esc_url( admin_url( 'upload.php' ) ) . '" target="_blank"><strong>'
					. esc_html__( 'Media Library', 'media-library-recovery' )
					. '</strong></a>',
			)
		);
	}

	$mlr_admin->print_json_message(
		0,
		__( 'Something went wrong!' ),
	);
}

add_action( 'wp_ajax_mlr_recover_media', __NAMESPACE__ . '\mlr_recover_media' );
