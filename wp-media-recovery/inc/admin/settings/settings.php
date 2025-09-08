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

// The slug for plugin main page.
define( __NAMESPACE__ . '\MLR_SETTINGS_SLUG', 'mlr_settings' );

require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/settings-menu.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/settings-page.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/settings-actions.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/settings-register.php';

require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/file-size-limit.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/file-recovery-limit.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/uploads-folder.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/explorer-folders.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/compact-mode.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/hide-existing-media.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/media-types-supported.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/multisite-support.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/dynamic-thumbnails.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/overwrite-image-files.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/post-attachments.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/post-types-supported.php';
