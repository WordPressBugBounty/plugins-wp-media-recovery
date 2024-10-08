<?php
/**
 * [Short Description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2024, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

$mlr = new Media_Library_Recovery;

$admin_page = ( '' === $mlr->compact_mode )
	? 'admin.php?page=mlr_settings&p='
	: 'upload.php?page=mlr_settings&p=';

$prev_page     = ( isset( $_REQUEST['p'] ) && $_REQUEST['p'] > 1 ) ? ( $_REQUEST['p'] - 1 ) : 1;
$next_page     = ( isset( $_REQUEST['p'] ) && $_REQUEST['p'] > 0 ) ? ( $_REQUEST['p'] + 1 ) : 2;
$curr_page     = ( isset( $_REQUEST['p'] ) ) ? (int) $_REQUEST['p'] : 1;
$total_files   = $mlr->get_total_image_files();
$total_pages   = ceil( $total_files / $mlr->results_per_page );
$is_first_page = ( 1 === $curr_page ) ? true : false;
$is_last_page  = ( $curr_page > $total_pages - 1 ) ? true : false;

?>
<div class="mlr-admin">
	<div class="mlr-container">
		<div class="mlr-pro">
			<h4>
				<?php echo esc_html__( 'Get the PRO version today!', 'media-library-recovery' ); ?>
			</h4>
			<p>
				<?php echo esc_html__( 'With the PRO version you will get a lot more features with better performance and quicker recovery process.', 'media-library-recovery' ); ?>
			</p>

			<table>
				<tr>
					<th><?php echo esc_html__( 'Feature', 'media-library-recovery' ); ?></th>
					<th><?php echo esc_html__( 'Free', 'media-library-recovery' ); ?></th>
					<th><?php echo esc_html__( 'PRO', 'media-library-recovery' ); ?></th>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Number of files to recover at a time', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( '10', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'unlimited', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Recover media libraries with 10,000+ files as a background process with WP-Cron.', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Change the default wp-content/uploads folder path', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Larger files support', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'WordPress multisite support', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Media type support', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'image-only', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL media', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Post type support', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'page & post', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL post types', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Attach media to posts', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'with URL mapping and replacement', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Backup your uploads folder', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Better performance and quicker recovery process', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Search, filter, and sort media files', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'advanced', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'User-friendly media file explorer', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'default', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'pro', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Priority email support', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'media-library-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Regular plugin updates', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'delayed', 'media-library-recovery' ); ?></td>
					<td><?php echo esc_html__( 'first release', 'media-library-recovery' ); ?></td>
				</tr>
			</table>

			<p class="button-group">
				<a
					class="button button-primary button-pro"
					href="https://bit.ly/49Ri9Yv"
					target="_blank"
				>
					<?php echo esc_html__( 'GET PRO VERSION', 'media-library-recovery' ); ?>
				</a>
				<a
					class="button button-primary button-watch-video"
					href="https://www.youtube.com/watch?v=umEs5RTxuyI"
					target="_blank"
				>
					<?php echo esc_html__( 'Watch Video', 'media-library-recovery' ); ?>
				</a>
			</p>
		</div>

		<div class="mlr-explorer">
			<h2>
				<?php echo esc_html__( 'Media Library Recovery', 'media-library-recovery' ); ?>
			</h2>

			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with wp-content/uploads */
						__( 'A tool that helps you recover and restore images from your %1$s folder after a database failure or reset.' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<code>wp-content/uploads</code>',
				);
				?>
			</p>

			<p>
				<?php echo esc_html__( 'Click on any of the media items below to mark it up for recovery.', 'media-library-recovery' ); ?>
			</p>

			<hr />

			<p class="mlr-hide-media">
				<label>
					<input 
						type="checkbox" 
						id="mlr-hide-existing-media"
						name="mlr-hide-existing-media" 
					/> 
					<?php echo esc_html__( 'Hide Existing Media', 'media-library-recovery' ); ?>
				</label>
				<br />
				<small>
					* <?php echo esc_html__( 'Hide media found on the server and database.', 'media-library-recovery' ); ?>
				</small>
			</p>

			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %2$s is replaced with # of media files */
						/* translators: %2$s is replaced with wp-content/uploads */
						__( 'You have total %1$s image files in your %2$s folder.' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<strong>' . number_format( $total_files, 0, 2 ) . '</strong>',
					'<code>wp-content/uploads</code>',
				);
				?>
			</p>

			<div class="mlr-explorer-grid">
				<?php echo $mlr->display_media_grid(); ?>
			</div>

			<p>
				<div class="mlr-explorer-pagination">
					<div class="button-action">
						<button
							class="button button-primary button-large button-recovery"
							id="mlr-media-recovery-button"
							name="mlr-media-recovery-button"
						>
							<?php echo esc_html__( 'Media Recovery...', 'media-library-recovery' ); ?>
						</button>
						<span></span>
					</div>
					<div class="button-group">
						<a
							class="button button-primary button-large button-pagination"
							id="mlr-prev-page-button"
							name="mlr-prev-page-button"
							href="<?php echo esc_url( admin_url( "{$admin_page}{$prev_page}" ) ); ?>"
							<?php if ( $is_first_page ) : ?>
								disabled
							<?php endif; ?>
						>
							<?php echo esc_html__( '&larr; Previous Page', 'media-library-recovery' ); ?>
						</a>
						<a
							class="button button-primary button-large button-pagination"
							id="mlr-next-page-button"
							name="mlr-next-page-button"
							href="<?php echo esc_url( admin_url( "{$admin_page}{$next_page}" ) ); ?>"
							<?php if ( $is_last_page ) : ?>
								disabled
							<?php endif; ?>
						>
							<?php echo esc_html__( 'Next Page &rarr;', 'media-library-recovery' ); ?>
						</a>
					</div>
				</div>
			</p>

			<hr />

			<ul>
				<li>
					<i class="dashicons dashicons-visibility"></i> 
					<?php echo esc_html__( 'Files already recovered or found on your server and in your database.', 'media-library-recovery' ); ?>
				</li>
				<li>
					<i class="dashicons dashicons-hidden"></i> 
					<?php echo esc_html__( 'Files not found in your database and available for recovery.', 'media-library-recovery' ); ?>
				</li>
				<li>
					<i class="dashicons dashicons-yes"></i> 
					<?php echo esc_html__( 'Files selected for recovery and not found in your database.', 'media-library-recovery' ); ?>
				</li>
				<li>
					<i class="dashicons dashicons-lock"></i> 
					<?php echo esc_html__( 'Files that cannot be recovered because they exceed your limits.', 'media-library-recovery' ); ?>
				</li>
			</ul>
		</div>

		<p>
			<a href="javascript:void();" class="button" onclick="window.location.reload( true );">
				<strong>Reload...</strong>
			</a>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with Hint */
					__( '%1$s: Refresh this page manually if the recovering process does not complete within a couple of minutes', 'media-library-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				),
				'<strong>' . esc_html__( 'Hint', 'media-library-recovery' ) . '</strong>'
			);
			?>
		</p>

		<hr />

		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with DOES NOT upload or overwrite any media on the server */
					__( '• The plugin %1$s, and it will only scan the default uploads folder.', 'media-library-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				),
				'<strong>' . esc_html__( 'DOES NOT upload or overwrite any media on the server', 'media-library-recovery' ) . '</strong>'
			);
			?>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					__( '• The plugin allows you to restore existing media from the uploads folder and re-insert it into the WordPress database the right way.', 'media-library-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				)
			);
			?>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					/* translators: %1$s is replaced with max_execution_time */
					__( '• Becasue of your server %1$s time you cannot recover images over 2MB.' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				),
				'<code>max_execution_time</code>',
			);
			?>
		</p>

		<p>
			<?php
			printf(
				wp_kses(
					__( '• You cannot duplicate or overwirte existing media files and the plugin only supports images.', 'media-library-recovery' ),
					json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
				)
			);
			?>
		</p>

		<hr />

		<form method="post" action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>">
			<?php wp_nonce_field( 'mlr_security', 'mlr_nonce' ); ?>
			<?php
				settings_fields( MLR_SETTINGS_SLUG );
				do_settings_sections( MLR_SETTINGS_SLUG );
			?>
			<p class="submit button-group">
				<button
					type="submit"
					class="button button-primary"
					id="mlr-save-settings"
					name="mlr-save-settings"
				>
					<?php echo esc_html__( 'Save', 'media-library-recovery' ); ?>
				</button>
			</p>
		</form>

		<br clear="all" />

		<hr />

		<div class="fip-support-credits">
			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "Link to WP.org support forums" */
						__( 'If something is not clear, please open a ticket on the official plugin %1$s. All tickets should be addressed within a couple of working days.', 'media-library-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<a href="' . esc_url( MLR_PLUGIN_WPORG_RATE ) . '" target="_blank">' . esc_html__( 'Support Forum', 'media-library-recovery' ) . '</a>'
				);
				?>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Please rate us', 'media-library-recovery' ); ?></strong>
				<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_RATE ); ?>" target="_blank">
					<img src="<?php echo esc_url( MLR_PLUGIN_DIR_URL ); ?>assets/dist/img/rate.png" alt="Rate us @ WordPress.org" />
				</a>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Having issues?', 'media-library-recovery' ); ?></strong> 
				<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_RATE ); ?>" target="_blank">
					<?php echo esc_html__( 'Create a Support Ticket', 'media-library-recovery' ); ?>
				</a>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Developed by', 'media-library-recovery' ); ?></strong>
				<a href="https://<?php echo esc_url( MLR_PLUGIN_DOMAIN ); ?>" target="_blank">
					<?php echo esc_html__( 'Krasen Slavov @ Developry', 'media-library-recovery' ); ?>
				</a>
			</p>
		</div>

		<hr />

		<p>
			<small>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "Link to Patreon account for support" */
						__( '* For the price of a cup of coffee per month, you can %1$s in continuing to develop and maintain all of my free WordPress plugins, every little bit helps and is greatly appreciated!', 'media-library-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<a href="https://patreon.com/krasenslavov" target="_blank">' . esc_html__( 'help and support me on Patreon', 'media-library-recovery' ) . '</a>'
				);
				?>
			</small>
		</p>
	</div>
</div>
