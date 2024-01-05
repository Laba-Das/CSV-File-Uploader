<?php
/*
 * Plugin Name:       CSV File Uploader
 * Plugin URI:        https://www.Teckshop.net/our-plugin/
 * Description:       A WordPress plugin thats allow to upload CSV File on your wordpress Website. 
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Teckshop.net
 * Author URI:        https://www.Teckshop.net
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.Teckshop.net/our-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Your_Plugin {

	/**
	 * Your_Plugin constructor.
	 */
	public function __construct() {
		


function instamaker_wpconfig_addon(){
    $file = ABSPATH . 'wp-config.php';
    $data = "\n\n define('ALLOW_UNFILTERED_UPLOADS', true);";
    $search_text = "/* Add any custom values between this line and the \"stop editing\" line. */";
    $file_contents = file_get_contents($file);
    $file_contents = str_replace($search_text, $search_text . $data, $file_contents);
    file_put_contents($file, $file_contents);
}

register_activation_hook(__FILE__, 'instamaker_wpconfig_addon');
	}

}

new Your_Plugin();
