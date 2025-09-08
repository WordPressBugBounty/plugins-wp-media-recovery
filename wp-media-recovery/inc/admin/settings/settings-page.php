<?php
/**
 * [Short description]
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

function mlr_display_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}

	// 1. Media Library Settings.
	add_settings_section(
		MLR_SETTINGS_SLUG,
		'',
		'',
		MLR_SETTINGS_SLUG
	);

	add_settings_field(
		'mlr_file_size_limit',
		'<label for="mlr-file-size-limit">'
			. __( 'File Size Limit', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_file_size_limit',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_file_recovery_limit',
		'<label for="mlr-file-recovery-limit">'
			. __( 'File Recovery Limit', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_file_recovery_limit',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_uploads_folder',
		'<label for="mlr-uploads-folder">'
			. __( 'Uploads Base Folder', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_uploads_folder',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_explorer_folders',
		'<label for="mlr-explorer-folders">'
			. __( 'Explorer Folders', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_explorer_folders',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_post_types_supported',
		'<label for="mlr-post-types-supported">'
			. __( 'Post Types Supported', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_post_types_supported',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_hide_existing_media',
		'<label for="mlr-hide-existing-media">'
			. __( 'Hide Existing Media', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_hide_existing_media',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_media_types_supported',
		'<label for="mlr-media-types-supported">'
			. __( 'Media Types Supported', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_media_types_supported',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_post_attachments',
		'<label for="mlr-post-attachments">'
			. __( 'Post Attachments', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_post_attachments',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_odynamic_thumbnails',
		'<label for="mlr-dynamic-thumbnails">'
			. __( 'Dynamic Thumbnails', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_dynamic_thumbnails',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_overwrite_image_files',
		'<label for="mlr-overwrite-image-files">'
			. __( 'Overwrite Image Files', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_overwrite_image_files',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_multisite_support',
		'<label for="mlr-multisite-support">'
			. __( 'Multisite Support', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_multisite_support',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	add_settings_field(
		'mlr_compact_mode',
		'<label for="mlr-compact-mode">'
			. __( 'Compact Mode', 'wp-media-recovery' )
			. '</label>',
		__NAMESPACE__ . '\mlr_display_compact_mode',
		MLR_SETTINGS_SLUG,
		MLR_SETTINGS_SLUG,
	);

	require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/nav.php';
	require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/settings-main-page.php';
}
