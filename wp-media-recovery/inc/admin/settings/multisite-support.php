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
function mlr_display_multisite_support() {
	?>
		<select id="mlr-multisite-support" name="mlr_multisite_support" disabled>
			<option value="">No</option>
			<option value="yes">Yes</option>
		</select>
		<p class="description">
			<small>
				<?php echo esc_html__( 'Scan the media folder structure in a WordPress multisite setup.', 'wp-media-recovery' ); ?>
			</small>
		</p>
	<?php
}
