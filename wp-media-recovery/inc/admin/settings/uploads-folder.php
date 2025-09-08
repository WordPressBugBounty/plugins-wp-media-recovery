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
 * Display the setting.
 */
function mlr_display_uploads_folder() {
	?>
		<input
			type="text"
			class="regular-text"
			id="mlr-uploads-folder"
			name="mlr_uploads_folder"
			value="wp-content/uploads"
			placeholder="Enter your uploads custom folder path..."
			maxlength="255"
			disabled
		/>
		<p class="description">
			<small>
				<?php
					vprintf(
						wp_kses(
							/* translators: %1$s is replaced with "wp-content/uploads" */
							__( 'Change the base %1$s path of the WordPress uploads folder.', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
						),
						array( '<code>' . esc_html__( 'wp-content/uploads', 'wp-media-recovery' ) . '</code>' )
					);
				?>
			</small>
		</p>
	<?php
}
