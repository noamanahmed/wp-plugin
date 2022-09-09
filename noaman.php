<?php
/**
 * noaman
 *
 * @package       NOAMAN
 * @author        Noaman Ahmed
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   noaman
 * Plugin URI:    https://noamanahmed.com
 * Description:   Test Plugin
 * Version:       1.0.0
 * Author:        Noaman Ahmed
 * Author URI:    https://noamanahmed.com
 * Text Domain:   noaman
 * Domain Path:   /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

$plugin_dir = WP_PLUGIN_DIR . '/noaman';

define('NOAMAN_CACHE_KEY_PREFIX','noaman_cache_key_');

// Include your custom code here.

require_once $plugin_dir . '/shortcodes/images_search.php';