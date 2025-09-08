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

/**
 * Enqueue pointer only if not dismissed
 */
function mlr_enqueue_wp_pointer( $hook_suffix ) {
	// Only load on your plugin settings page (optional).
	// if ( 'toplevel_page_mlr_media_explorer' !== $hook_suffix ) {
	// 	return;
	// }

	// Check if dismissed.
	$dismissed = get_user_meta( get_current_user_id(), 'mlr_pointer', true );

	if ( $dismissed ) {
		return;
	}

	// Load WP Pointer styles and scripts.
	wp_enqueue_style( 'wp-pointer' );
	wp_enqueue_script( 'wp-pointer' );

	wp_localize_script(
		'wp-pointer',
		'mlr_pointer',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
		)
	);

	// Add inline JS in footer.
	add_action( 'admin_print_footer_scripts', __NAMESPACE__ . '\mlr_wp_pointer_script' );
}

add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\mlr_enqueue_wp_pointer' );

/**
 * The actual pointer
 */
function mlr_wp_pointer_script() {
	$pointer_content = sprintf(
		'<h3>%s</h3><p>%s</p>',
		esc_html__( 'Welcome to Media Library Recovery!', 'wp-media-recovery' ),
		sprintf(
			/* translators: %1$s is replaced with "New!" */
			/* translators: %2$s is replaced with "Media Explorer" */
			esc_html__( '%1$s Quickly restore and recover images from your uploads folder using the %2$s tool.', 'wp-media-recovery' ),
			'<strong>' . esc_html__( 'New!', 'wp-media-recovery' ) . '</strong>',
			'<strong>' . esc_html__( 'Media Explorer', 'wp-media-recovery' ) . '</strong>'
		)
	);
	?>
	<script type="text/javascript">
		jQuery(function($) {
			var $target = $('#toplevel_page_mlr_media_explorer');

			if ($target.length) {
				$target.pointer({
					content: '<?php echo wp_kses_post( addslashes( $pointer_content ) ); ?>',
					position: {
						edge: 'left',
						align: 'center'
					},
					close: function() {
						$.post(mlr_pointer.ajaxurl, {
							action: 'dismiss_wp_pointer',
							pointer: 'mlr_pointer'
						});
					}
				}).pointer('open');
			}
		});
	</script>
	<?php
}

/**
 * Register dismissal action
 */
function mlr_dismiss_wp_pointer() {
	if ( isset( $_POST['pointer'] ) ) {
		update_user_meta(
			get_current_user_id(),
			sanitize_text_field( $_POST['pointer'] ),
			true
		);
	}

	// Properly terminate the AJAX request.
	wp_send_json_success( 'Pointer dismissed successfully!' );
}

add_action( 'wp_ajax_dismiss_wp_pointer', __NAMESPACE__ . '\mlr_dismiss_wp_pointer' );

/**
 * Reset WP Pointer dismissal on plugin deactivation
 */
function mlr_reset_pointer_on_deactivation() {
	// Get all users safely
	if ( ! function_exists( 'get_users' ) ) {
		require_once ABSPATH . 'wp-includes/pluggable.php';
	}

	// Delete the dismissal flag for all users.
	$users = get_users( array( 'fields' => array( 'ID' ) ) );

	if ( empty( $users ) ) {
		return;
	}

	foreach ( $users as $user ) {
		delete_user_meta( $user->ID, 'mlr_pointer' );
	}
}

add_action( 'deactivated_plugin', __NAMESPACE__ . '\mlr_reset_pointer_on_deactivation' );
