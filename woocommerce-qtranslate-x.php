<?php
/**
 * Plugin Name: WooCommerce & qTranslate-X
 * Plugin URI: https://wordpress.org/plugins/woocommerce-qtranslate-x
 * Description: Enables multilingual framework for plugin "WooCommerce".
 * Version: 1.3
 * Author: qTranslate Team
 * Author URI: http://qtranslatexteam.wordpress.com/about
 * License: GPL2
 * Tags: multilingual, multi, language, translation, qTranslate-X, WooCommerce
 * Author e-mail: qTranslateTeam@gmail.com
 */
if(!defined('ABSPATH'))exit;

define('QWC_VERSION','1.3');

function qwc_init_language($url_info)
{
	if($url_info['doing_front_end']) {
		require_once(dirname(__FILE__)."/qwc-front.php");
	}else{
		require_once(dirname(__FILE__)."/qwc-admin.php");
	}
}
add_action('qtranslate_init_language','qwc_init_language');
