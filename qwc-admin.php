<?php
if(!defined('ABSPATH'))exit;

add_filter('qtranslate_load_admin_page_config','qwc_add_admin_page_config');
function qwc_add_admin_page_config($page_configs)
{
	{//post.php //since 1.0.1
	$page_config = array();
	$page_config['pages'] = array( 'post.php' => '');
	$page_config['anchors'] = array( 'post', 'woocommerce-product-data', 'postexcerpt' );

	$page_config['forms'] = array();

	$f = array();
	$f['form'] = array( 'id' => 'post' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	//$fields[] = array( 'tag' => 'INPUT', 'class' => 'attribute_name' );//needs more work
	//$fields[] = array( 'class' => 'attribute_name', 'encode' => 'display' );//catches some twice
	$fields[] = array( 'tag' => 'TD', 'class' => 'attribute_name', 'encode' => 'display' );
	$fields[] = array( 'tag' => 'STRONG', 'class' => 'attribute_name', 'encode' => 'display' );
	$fields[] = array( 'tag' => 'OPTION', 'encode' => 'display' );
	//$fields[] = array( 'class' => 'attribute_values', 'encode' => 'display' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//edit.php?post_type=product&page=product_attributes
	$page_config = array();
	$page_config['pages'] = array( 'edit.php' => 'post_type=product&page=product_attributes');
	$page_config['anchors'] = array( 'col-container'  );

	$page_config['forms'] = array();

	$f = array();
	//$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'id' => 'attribute_label' );
	//$fields[] = array( 'tag' => 'A', 'container_class' => 'attributes-table', 'encode' => 'display' );
	$fields[] = array( 'tag' => 'TD', 'container_id' => 'col-right', 'encode' => 'display'  );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//edit-tags.php?taxonomy=pa_product-bg&post_type=product
	$page_config = array();
	$page_config['pages'] = array( 'edit-tags.php' => 'post_type=product');
	//$page_config['anchors'] = array( 'col-container'  );

	$page_config['forms'] = array();

	$f = array();
	//$f['form'] = array( 'id' => 'mainform' );

	$f['fields'] = array();
	$fields = &$f['fields']; // shorthand

	$fields[] = array( 'tag' => 'H2', 'container_class' => 'wrap', 'encode' => 'display' );
	$fields[] = array( 'tag' => 'H3', 'container_id' => 'col-left', 'encode' => 'display' );
	$fields[] = array( 'id' => 'search-submit', 'attr' => 'value', 'encode' => 'display' );
	$fields[] = array( 'id' => 'submit', 'attr' => 'value', 'encode' => 'display' );
	//$fields[] = array( 'id' => '' );

	$page_config['forms'][] = $f;
	$page_configs[] = $page_config;
	}

	{//tab=tax
	$page_config = array();
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

function qwc_email_get_option($value_translated, $wce /* WC_Email object*/, $value=null, $key=null, $empty_value=null){
	if(!$value) return $value_translated;//so that older WC versions do not get nasty output.
	return $value;
}
add_filter( 'woocommerce_email_get_option', 'qwc_email_get_option', 0, 4 );

/**
 * @since 1.0.1
 */
/*
function qwc_attribute_label($label, $name){
	//global $q_config;
	//if(isset($q_config['term_name'][$name])) {
	//	$label = qtranxf_join_b($q_config['term_name'][$name]);
	//}
	//qtranxf_dbg_log('qwc_attribute_label: label="'.$label.'"; name: ',$name);
	$label = qtranxf_term_name_encoded($label);
	//qtranxf_dbg_log('qwc_attribute_label: label: ',$label);
	return $label;
}
add_filter( 'woocommerce_attribute_label', 'qwc_attribute_label', 0, 2 );
*/
add_filter( 'woocommerce_variation_option_name', 'qtranxf_term_name_encoded', 5);

/*
// it does the job, but WC javascript breaks it anyway later.
function qwc_useAdminTermLibJoin($obj, $taxonomies=null, $args=null) {
	global $pagenow;
	//qtranxf_dbg_log('qwc_useAdminTermLibJoin: $pagenow='.$pagenow);
	//qtranxf_dbg_log('qwc_useAdminTermLibJoin: $obj:',$obj);
	//qtranxf_dbg_log('qwc_useAdminTermLibJoin: $taxonomies:',$taxonomies);
	//qtranxf_dbg_log('qwc_useAdminTermLibJoin: $args:',$args);
	switch($pagenow){
		case 'post.php':
			if($taxonomies){
				foreach($taxonomies as $t){
					if(strpos($t,'pa_')===0)
						return qtranxf_get_terms_joined($obj);
				}
			}
		default: return $obj;// is done in qtranxf_useAdminTermLibJoin
	}
}
//add_filter('get_term', 'qwc_useAdminTermLibJoin', 4, 2);
add_filter('get_terms', 'qwc_useAdminTermLibJoin', 4, 3);
*/
