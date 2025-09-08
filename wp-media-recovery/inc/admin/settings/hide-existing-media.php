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
function mlr_display_hide_existing_media() {
	?>
		<select id="mlr-hide-existing-media" name="mlr_hide_existing_media" disabled>
			<option value="">No</option>
			<option value="yes">Yes</option>
		</select>
		<p class="description">
			<small>
				<?php
					vprintf(
						wp_kses(
							/* translators: %1$s is replaced with "Media already in your library will be hidden by default" */
							__( 'Automatically hide existing media in the explorer. (%1$s).', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
						),
						array( '<em>' . esc_html__( 'Media already in your library will be hidden by default', 'wp-media-recovery' ) . '</em>' )
					);
				?>
			</small>
		</p>
	<?php
}
