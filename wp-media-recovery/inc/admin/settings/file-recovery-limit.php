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
function mlr_display_file_recovery_limit() {
	?>
		<input
			type="number"
			class="regular-text"
			id="mlr-file-recovery-limit"
			name="mlr_file_recovery_limit"
			value="5"
			placeholder="Enter your file recovery limit..."
			minlength="2"
			maxlength="3"
			min="1"
			max="10"
			step="1"
			disabled
		/>
		<p class="description">
			<small>
				<?php
					vprintf(
						wp_kses(
							/* translators: %1$s is replaced with "Use a lower number for larger files or server limitations" */
							__( 'Set a custom file recovery limit per request. (%1$s).', 'wp-media-recovery' ),
							json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
						),
						array( '<em>' . esc_html__( 'Use a lower number for larger files or server limitations', 'wp-media-recovery' ) . '</em>' )
					);
				?>
			</small>
		</p>
	<?php
}
