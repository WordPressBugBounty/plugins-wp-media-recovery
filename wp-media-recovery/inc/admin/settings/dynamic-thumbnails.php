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
function mlr_display_dynamic_thumbnails() {
	?>
		<select id="mlr-dynamic-thumbnails" name="mlr_dynamic_thumbnails" disabled>
			<option value="">No</option>
			<option value="yes">Yes</option>
		</select>
		<p class="description">
			<small>
				<?php
					vprintf(
						wp_kses(
							/* translators: %1$s is replaced with "Optimize the Media Explorer for large libraries" */
							__( 'Generate dynamic thumbnails on the fly. (%1$s).', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
						),
						array( '<em>' . esc_html__( 'Optimize the Media Explorer for large libraries', 'wp-media-recovery' ) . '</em>' )
					);
				?>
			</small>
		</p>
	<?php
}
