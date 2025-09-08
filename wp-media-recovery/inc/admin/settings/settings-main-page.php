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

$mlr_admin = new MLR_Admin();

$has_user_cap = $mlr_admin->check_user_cap();

?>
<div class="mlr-admin">
	<div class="mlr-container">
		<div id="mlr-output" class="notice is-dismissible mlr-output"></div>
		<?php settings_errors( 'mlr_settings_errors' ); ?>
		<div class="mlr-pro">
			<h4>
				<?php echo esc_html__( 'Get the PRO version today!', 'wp-media-recovery' ); ?>
			</h4>
			<p>
				<?php echo esc_html__( 'The PRO version offers more features, improved performance, and a faster recovery process.', 'wp-media-recovery' ); ?>
			</p>
			<table>
				<tr>
					<th><?php echo esc_html__( 'Feature', 'wp-media-recovery' ); ?></th>
					<th><?php echo esc_html__( 'Free', 'wp-media-recovery' ); ?></th>
					<th><?php echo esc_html__( 'PRO', 'wp-media-recovery' ); ?></th>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Number of files to recover at a time', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( '10', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'unlimited', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Recover media libraries with 10,000+ files as a background process with WP-Cron.', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Change the default wp-content/uploads folder path', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Larger files support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'WordPress multisite support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Media type support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'image-only', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL media', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Post type support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'page & post', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'ALL post types', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Attach media to posts', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'with URL mapping and replacement', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Backup your uploads folder', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Better performance and quicker recovery process', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Search, filter, and sort media files', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'basic', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'advanced', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'User-friendly media file explorer', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'default', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'pro', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Priority email support', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'no', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'yes', 'wp-media-recovery' ); ?></td>
				</tr>
				<tr>
					<td><?php echo esc_html__( 'Regular plugin updates', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'delayed', 'wp-media-recovery' ); ?></td>
					<td><?php echo esc_html__( 'first release', 'wp-media-recovery' ); ?></td>
				</tr>
			</table>
			<p class="button-group">
				<a
					class="button button-primary button-pro"
					href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_table_button"
					target="_blank"
				>
					<?php echo esc_html__( 'GET PRO VERSION', 'wp-media-recovery' ); ?>
				</a>
				<a
					class="button button-primary button-watch-video"
					href="https://www.youtube.com/watch?v=umEs5RTxuyI"
					target="_blank"
				>
					<?php echo esc_html__( 'Watch Video', 'wp-media-recovery' ); ?>
				</a>
			</p>
			<p>&nbsp;</p>
			<p>
				<?php
				printf(
					/* translators: %1$s is replaced with "Need to perform bulk or mass search and replace?" */
					/* translators: %2$s is replaced with "Get the PRO version now" */
					wp_kses( '%1$s %2$s!', 'wp-media-recovery', json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true ) ),
					'<em>' . esc_html__( 'Need to perform background recovery with extended options and improved media explorer?', 'wp-media-recovery' ) . '</em>',
					'<a href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_table_button" target="_blank"><strong>' . esc_html__( 'Get the PRO version now', 'wp-media-recovery' ) . '</strong></a>'
				);
				?>
			</p>
			<p>
				<iframe 
					height="320" 
					src="https://www.youtube.com/embed/umEs5RTxuyI" 
					title="Media Library Recovery" 
					frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
					allowfullscreen>
				</iframe>
			</p>
			<hr />
			<p>
				<?php
				printf(
					/* translators: %1$s is replaced with "Note" */
					wp_kses( '%1$s: Improved media explorer, unlimited files to recover, search, filters, background recovery, and custom options are available only in the PRO version!', 'wp-media-recovery', json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true ) ),
					'<strong>' . esc_html__( 'Note', 'wp-media-recovery' ) . '</strong>'
				);
				?>
			</p>
		</div>
		<p>
			<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "Important" */
						/* translators: %2$s is replaced with "Link to the website" */
						/* translators: %3$s is replaced with "Get PRO Version" */
						__( '%1$s: <a href="%2$s" target="_blank">%3$s</a> to able to have a full control over the plugin settings and extend the default mode.', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
					),
					'<strong>' . esc_html__( 'Important', 'wp-media-recovery' ) . '</strong>',
					esc_url( 'https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge' ),
					'<strong>' . esc_html__( 'Get the PRO Version today', 'wp-media-recovery' ) . '</strong>'
				);
				?>
		</p>
		<form method="post" action="<?php echo esc_url( admin_url( 'options.php' ) ); ?>">
			<?php wp_nonce_field( 'mlr_settings_nonce', 'mlr_wpnonce' ); ?>
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
					<?php if ( ! $has_user_cap ) : ?>
						disabled
					<?php endif; ?>
				>
					<?php echo esc_html__( 'Save', 'wp-media-recovery' ); ?>
				</button>
				<button
					type="button"
					class="button"
					id="mlr-reset-settings"
					name="mlr-reset-settings"
					<?php if ( ! $has_user_cap ) : ?>
						disabled
					<?php endif; ?>
				>
					<?php echo esc_html__( 'Reset', 'wp-media-recovery' ); ?>
				</button>
			</p>
		</form>
		<br clear="all" />
		<hr />
		<div class="mlr-support-credits">
			<p>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "Support Forum" */
						__( 'If something isn\'t clear, please open a ticket on the official plugin %1$s. We aim to address all tickets within a few working days.', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<a href="' . esc_url( MLR_PLUGIN_WPORG_SUPPORT ) . '" target="_blank">' . esc_html__( 'Support Forum', 'wp-media-recovery' ) . '</a>'
				);
				?>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Please rate us', 'wp-media-recovery' ); ?></strong>
				<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_RATE ); ?>" target="_blank">
					<img src="<?php echo esc_url( MLR_PLUGIN_DIR_URL ); ?>assets/dist/img/rate.png" alt="Rate us @ WordPress.org" />
				</a>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Having issues?', 'wp-media-recovery' ); ?></strong> 
				<a href="<?php echo esc_url( MLR_PLUGIN_WPORG_SUPPORT ); ?>" target="_blank">
					<?php echo esc_html__( 'Create a Support Ticket', 'wp-media-recovery' ); ?>
				</a>
			</p>
			<p>
				<strong><?php echo esc_html__( 'Developed by', 'wp-media-recovery' ); ?></strong>
				<a href="https://krasenslavov.com/" target="_blank">
					<?php echo esc_html__( 'Krasen Slavov @ Developry', 'wp-media-recovery' ); ?>
				</a>
			</p>
		</div>
		<hr />
		<p>
			<small>
				<?php
				printf(
					wp_kses(
						/* translators: %1$s is replaced with "help and support me on Patreon" */
						__( '* For the price of a cup of coffee per month, you can %1$s for the development and maintenance of all my free WordPress plugins. Every contribution helps and is deeply appreciated!', 'wp-media-recovery' ),
						json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
					),
					'<a href="https://patreon.com/krasenslavov" target="_blank">' . esc_html__( 'help and support me on Patreon', 'wp-media-recovery' ) . '</a>'
				);
				?>
			</small>
		</p>
	</div>
</div>
