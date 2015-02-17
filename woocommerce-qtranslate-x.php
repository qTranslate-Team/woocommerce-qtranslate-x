<?php
/**
 * Plugin Name: WooCommerce & qTranslate-X
 * Plugin URI: https://wordpress.org/plugins/woocommerce-qtranslate-x
 * Description: Enables multilingual framework for plugin "WooCommerce".
 * Version: 1.0
 * Author: qTranslate Team
 * Author URI: http://qtranslatexteam.wordpress.com/about
 * License: GPL2
 * Tags: multilingual, multi, language, translation, qTranslate-X, Events Made Easy
 * Author e-mail: qTranslateTeam@gmail.com
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

define('QWC_VERSION','1.0');

if(is_admin()) :

add_filter('qtranslate_load_admin_page_config','qwc_add_admin_page_config');
function qwc_add_admin_page_config($page_configs)
{
	{//tab=tax
	$page_config = array();
	//$page_config['pages'] = array('admin.php' => 'page=wc-settings');
	//$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=tax','admin.php' => 'page=wc-settings&tab=checkout' );
	//$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=(tax|checkout)');
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=tax');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	//$fields[] = array( 'id' => 'woocommerce_tax_classes' );//todo
	$fields[] = array( 'id' => 'woocommerce_price_display_suffix' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=checkout&section=wc_gateway_bacs
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=checkout&section=wc_gateway_bacs');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_bacs_title' );
	$fields[] = array( 'id' => 'woocommerce_bacs_description' );
	$fields[] = array( 'id' => 'woocommerce_bacs_instructions' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=checkout&section=wc_gateway_cheque
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=checkout&section=wc_gateway_cheque');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_cheque_title' );
	$fields[] = array( 'id' => 'woocommerce_cheque_description' );
	$fields[] = array( 'id' => 'woocommerce_cheque_instructions' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=checkout&section=wc_gateway_cod
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=checkout&section=wc_gateway_cod');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_cod_title' );
	$fields[] = array( 'id' => 'woocommerce_cod_description' );
	$fields[] = array( 'id' => 'woocommerce_cod_instructions' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=checkout&section=wc_gateway_paypal
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=checkout&section=wc_gateway_paypal');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_paypal_title' );
	$fields[] = array( 'id' => 'woocommerce_paypal_description' );
	$fields[] = array( 'id' => 'woocommerce_paypal_instructions' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email(&section=|)');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_email_from_name' );
	//$fields[] = array( 'id' => 'woocommerce_email_header_image' );
	$fields[] = array( 'id' => 'woocommerce_email_footer_text' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_new_order
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_new_order');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_new_order_recipient' );
	$fields[] = array( 'id' => 'woocommerce_new_order_subject' );
	$fields[] = array( 'id' => 'woocommerce_new_order_heading' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	return $page_configs;
}

else:

add_filter('woocommerce_gateway_title', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);
add_filter('woocommerce_gateway_description', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);
add_filter('woocommerce_gateway_icon', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);

add_filter('woocommerce_shipping_methods', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);

add_filter('woocommerce_attribute_label', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);

//add_filter('woocommerce_in_cart_product_title', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);
add_filter('woocommerce_cart_item_name', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);
add_filter('woocommerce_cart_item_thumbnail', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);

//add_filter('woocommerce_order_table_product_title', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);
add_filter('woocommerce_order_items_table', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);//object
add_filter('woocommerce_order_item_name', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 0);

add_filter( 'woocommerce_email_get_option', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 20 );

add_filter( 'wp_mail_from_name', 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', 20 );

endif;
?>
