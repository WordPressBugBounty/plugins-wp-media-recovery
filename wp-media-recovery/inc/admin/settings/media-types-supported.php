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
function mlr_display_media_types_supported() {
	?>
		<select id="mlr-media-types-supported" name="mlr_media_types_supported[]" multiple disabled>
			<option value="image">Images</option>
			<option value="audio">Audio</option>
			<option value="video">Video</option>
			<option value="document">Documents</option>
			<option value="spreadsheet">Spreadsheets</option>
			<option value="archive">Archives</option>
		</select>
		<p class="description">
			<small>
				<?php echo esc_html__( 'Choose the media file types to display in the explorer.', 'wp-media-recovery' ); ?>
			</small>
		</p>
	<?php
}
