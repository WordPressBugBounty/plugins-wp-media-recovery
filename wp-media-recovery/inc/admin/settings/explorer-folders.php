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
function mlr_display_explorer_folders() {
	?>
		<select id="mlr-explorer-folders" name="mlr_explorer_folders[]" multiple disabled>
			<option value="2022" selected>2022</option>
			<option value="2023" selected>2023</option>
			<option value="2024" selected>2024</option>
			<option value="2025" selected>2025</option>
		</select>
		<p class="description">
			<small>
				<?php echo esc_html__( 'Choose folders to include in the media explorer.', 'wp-media-recovery' ); ?>
			</small>
		</p>
	<?php
}
