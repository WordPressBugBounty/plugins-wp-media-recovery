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

function mlr_display_media_explorer_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}

	require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/nav.php';
	require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/media-explorer/media-explorer-main-page.php';
}
