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
function mlr_display_overwrite_image_files() {
	?>
	<select id="mlr-overwrite-image-files" name="mlr_overwrite_image_files" disabled>
			<option value="">No</option>
			<option value="yes">Yes</option>
		</select>
		<p class="description">
			<small>
				<?php
					vprintf(
						wp_kses(
							/* translators: %1$s is replaced with "Show only one instance for images with identical file names but different extensions" */
							__( 'Overwrite image files with the same base name. (%1$s).', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
						),
						array( '<em>' . esc_html__( 'Show only one instance for images with identical file names but different extensions', 'wp-media-recovery' ) . '</em>' )
					);
				?>
			</small>
		</p>
	<?php
}
