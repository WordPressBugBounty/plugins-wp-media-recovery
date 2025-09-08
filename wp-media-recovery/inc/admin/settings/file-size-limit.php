<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.1
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

/**
 * Display the setting.
 */
function mlr_display_file_size_limit() {
	?>
	<input
			type="number"
			class="regular-text"
			id="mlr-file-size-limit"
			name="mlr_file_size_limit"
			value="4"
			placeholder="Enter your file size limit (in MB)..."
			minlength="1"
			maxlength="2"
			min="0"
			max="10"
			step="1"
			disabled
		/> MB
		<p class="description">
			<small>
				<?php
					vprintf(
						wp_kses(
							/* translators: %1$s is replaced with "Maximum limit is 10MB; use 0 for unlimited" */
							__( 'Overwrite the default file size limit of 4MB. (%1$s).', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
						),
						array( '<em>' . esc_html__( 'Maximum limit is 10MB; use 0 for unlimited', 'wp-media-recovery' ) . '</em>' )
					);
				?>
			</small>
		</p>
	<?php
}
