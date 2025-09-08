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
function mlr_display_post_types_supported() {
	?>
		<select id="mlr-post-types-supported" name="mlr_post_types_supported[]" multiple disabled>
			<option value="post" selected>Post</option>
			<option value="page" selected>Page</option>
		</select>
		<p class="description">
			<small>
				<?php echo esc_html__( 'Choose the post types supported by the plugin.', 'wp-media-recovery' ); ?>
			</small>
		</p>
	<?php
}
