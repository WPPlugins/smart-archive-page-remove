<?php

/**
 * The smart Archive Page Remove Plugin
 *
 * smart Archive Page Remove allows you to completely remove Archive Pages from your Blog
 *
 * @wordpress-plugin
 * Plugin Name: smart Archive Page Remove
 * Plugin URI: http://petersplugins.com/free-wordpress-plugins/smart-archive-page-remove/
 * Description: Completely remove unwanted Archive Pages from your Blog
 * Version: 1.4
 * Author: Peter Raschendorfer
 * Author URI: http://petersplugins.com
 * Text Domain: smart-archive-page-remove
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


// If this file is called directly, abort
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Load core plugin class and run the plugin
 */
require_once( plugin_dir_path( __FILE__ ) . '/inc/class-smart-archive-page-remove.php' );
$pp_smart_archive_page_remove = new PP_Smart_Archive_Page_Remove( __FILE__ );
?>