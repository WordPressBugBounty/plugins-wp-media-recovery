<?php
/**
 * Admin navigation/settings partial.
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.7
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

$mlr_admin = new MLR_Admin();

$page = ( isset( $_REQUEST['page'] ) ) ? sanitize_text_field( wp_unslash( $_REQUEST['page'] ) ) : '';

?>
<div class="notice notice-info mlr-admin">
	<?php
	printf(
		wp_kses(
		/* translators: %1$s is replaced with "Link to the website" */
		/* translators: %2$s is replaced with "Get PRO Version" */
			__( '<a href="%1$s" target="_blank">%2$s</a>! Use the full-featured and improved media explorer with extened options.', 'wp-media-recovery' ),
			json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR )
		),
		esc_url( 'https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge' ),
		'<strong>' . esc_html__( 'Get the PRO Version today', 'wp-media-recovery' ) . '</strong>'
	);
	?>
</div>
<div class="mlr-admin">
	<h2>
		<?php echo esc_html__( 'Media Library Recovery', 'wp-media-recovery' ); ?>
	</h2>
	<p>
		<?php
		printf(
			wp_kses(
				/* translators: %1$s is replaced with "wp-content/uploads" */
				__( 'A tool to restore and recover images from your %1$s folder after database resets or failures, ensuring your media library is rebuilt quickly.', 'wp-media-recovery' ),
				json_decode( MLR_PLUGIN_ALLOWED_HTML_ARR, true )
			),
			'<code>' . esc_html__( 'wp-content/uploads', 'wp-media-recovery' ) . '</code>',
		);
		?>
	</p>
	<nav class="mlr-page-nav">
		<a 
			href="<?php echo esc_url( admin_url( $mlr_admin->admin_page . MLR_MEDIA_EXPLORER_SLUG ) ); ?>" 
			class="mlr-media-explorer-tab <?php echo ( MLR_MEDIA_EXPLORER_SLUG === $page ) ? 'current' : ''; ?>"
		>
			<?php echo esc_html__( 'Media Explorer', 'wp-media-recovery' ); ?>
		</a>
		<a 
			href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" 
			class="mlr-backup-tab" target="_blank"
		>
			<?php echo esc_html__( 'Backup', 'wp-media-recovery' ); ?>
			<span class="mlr-status-badge mlr-status-upgrade">
				<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
			</span>
		</a>
		<a 
			href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" 
			class="mlr-license-tab" target="_blank"
		>
			<?php echo esc_html__( 'License', 'wp-media-recovery' ); ?>
			<span class="mlr-status-badge mlr-status-upgrade">
				<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
			</span>
		</a>
		<a 
			href="<?php echo esc_url( admin_url( $mlr_admin->admin_page . MLR_SETTINGS_SLUG ) ); ?>" 
			class="mlr-settings-tab <?php echo ( MLR_SETTINGS_SLUG === $page ) ? 'current' : ''; ?>"
		>
			<?php echo esc_html__( 'Options', 'wp-media-recovery' ); ?>
		</a>
		<a 
			href="https://mediarecoveryplugin.com/?utm_source=mlr&utm_medium=free_plugin&utm_campaign=pro_badge" 
			class="mlr-help-tab" target="_blank"
		>
			<?php echo esc_html__( 'Help', 'wp-media-recovery' ); ?>
			<span class="mlr-status-badge mlr-status-upgrade">
				<?php echo esc_html__( 'Pro', 'wp-media-recovery' ); ?>
			</span>
		</a>
	</nav>
</div>
