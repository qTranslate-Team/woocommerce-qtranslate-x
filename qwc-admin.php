<?php
if(!defined('ABSPATH'))exit;

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

	$fields[] = array( 'class' => 'subsubsub', 'encode' => 'display' );
	$fields[] = array( 'id' => 'woocommerce_tax_classes', 'encode' => 'byline' );
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

	{//tab=shipping&section=wc_shipping_free_shipping
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=shipping&section=wc_shipping_free_shipping');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_free_shipping_title' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=shipping&section=wc_shipping_flat_rate
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=shipping&section=wc_shipping_flat_rate');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_flat_rate_title' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=shipping&section=wc_shipping_international_delivery
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=shipping&section=wc_shipping_international_delivery');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_international_delivery_title' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=shipping&section=wc_shipping_local_delivery
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=shipping&section=wc_shipping_local_delivery');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_local_delivery_title' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=shipping&section=wc_shipping_local_pickup
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=shipping&section=wc_shipping_local_pickup');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_local_pickup_title' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email(&section=|)$');
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
	}// */

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

	{//tab=email&section=wc_email_cancelled_order
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_cancelled_order');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_cancelled_order_recipient' );
	$fields[] = array( 'id' => 'woocommerce_cancelled_order_subject' );
	$fields[] = array( 'id' => 'woocommerce_cancelled_order_heading' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_customer_processing_order
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_customer_processing_order');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	//$fields[] = array( 'id' => 'woocommerce_customer_processing_order_recipient' );
	$fields[] = array( 'id' => 'woocommerce_customer_processing_order_subject' );
	$fields[] = array( 'id' => 'woocommerce_customer_processing_order_heading' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_customer_completed_order
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_customer_completed_order');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_customer_completed_order_subject' );
	$fields[] = array( 'id' => 'woocommerce_customer_completed_order_heading' );
	$fields[] = array( 'id' => 'woocommerce_customer_completed_order_subject_downloadable' );
	$fields[] = array( 'id' => 'woocommerce_customer_completed_order_heading_downloadable' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_customer_invoice
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_customer_invoice');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_customer_invoice_subject' );
	$fields[] = array( 'id' => 'woocommerce_customer_invoice_heading' );
	$fields[] = array( 'id' => 'woocommerce_customer_invoice_subject_paid' );
	$fields[] = array( 'id' => 'woocommerce_customer_invoice_heading_paid' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_customer_note
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_customer_note');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_customer_note_subject' );
	$fields[] = array( 'id' => 'woocommerce_customer_note_heading' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_customer_reset_password
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_customer_reset_password');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_customer_reset_password_subject' );
	$fields[] = array( 'id' => 'woocommerce_customer_reset_password_heading' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=email&section=wc_email_customer_new_account
	$page_config = array();
	$page_config['pages'] = array( 'admin.php' => 'page=wc-settings&tab=email&section=wc_email_customer_new_account');
	//$page_config['anchors'] = array( 'titlediv'  );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'woocommerce_customer_new_account_subject' );
	$fields[] = array( 'id' => 'woocommerce_customer_new_account_heading' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	return $page_configs;
}

function qwc_email_get_option($value, $wce /* WC_Email object*/, $key=null, $empty_value=null){
	if(!$key) return $value;
	return call_user_func( array($wce,'WC_Settings_API::get_option'), $key, $empty_value );
}
add_filter( 'woocommerce_email_get_option', 'qwc_email_get_option', 0, 4 );

?>
