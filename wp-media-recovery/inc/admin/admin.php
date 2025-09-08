<?php
/**
 * Load admin files.
 *
 * @package    DEVRY\MLR
 * @copyright  Copyright (c) 2025, Developry Ltd.
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 * @since      1.4
 */

namespace DEVRY\MLR;

! defined( ABSPATH ) || exit; // Exit if accessed directly.

require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/requirements/requirements.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/media-explorer/media-explorer.php';
require_once MLR_PLUGIN_DIR_PATH . 'inc/admin/settings/settings.php';
