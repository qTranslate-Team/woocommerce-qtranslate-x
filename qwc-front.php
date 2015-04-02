<?php
if(!defined('ABSPATH'))exit;

function qwc_add_filters_front() {

	remove_filter('get_post_metadata', 'qtranxf_filter_postmeta', 5);
	add_filter('get_post_metadata', 'qwc_filter_postmeta', 5, 4);

	$use_filters = array(
		/* do not exist any more */
		//'option_woocommerce_email_from_name' => 10,
		//'the_title_attribute' => 10,
		//'woocommerce_order_product_title' => 10,
		//'woocommerce_composite_component_title' => 10,
		//'woocommerce_composite_component_description' => 10,
		//'woocommerce_composited_product_excerpt' => 10,
		//'woocommerce_bto_component_title' => 10,
		//'woocommerce_bto_component_description' => 10,
		//'woocommerce_bto_product_excerpt' => 10,
		//'woocommerce_bundled_item_title' => 10,
		//'woocommerce_bundled_item_description' => 10,
		//'woocommerce_in_cart_product_title' => 10,
		//'woocommerce_order_table_product_title' => 10,

		/* one-argument filters */
		'wp_mail_from_name' => 20,
		'woocommerce_order_item_display_meta_value' => 20,
		'woocommerce_order_items_table' => 20,
		'woocommerce_page_title' => 20,
		'woocommerce_short_description' => 20,
		'woocommerce_variation_option_name' => 20,
		//'woocommerce_shipping_methods' => 20

		/* two-argument filters */
		'woocommerce_attribute_label' => 20,
		'woocommerce_cart_shipping_method_full_label' => 20,
		'woocommerce_cart_tax_totals' => 20,
		'woocommerce_email_footer_text' => 20,
		'woocommerce_gateway_description' => 20,
		'woocommerce_gateway_title' => 20,
		'woocommerce_gateway_icon' => 20,
		'woocommerce_order_item_name' => 20,
		'woocommerce_order_shipping_to_display' => 20,
		'woocommerce_order_tax_totals' => 20,
		'woocommerce_product_title' => 20,
		'woocommerce_rate_label' => 20,

		/* three-argument filters */
		'woocommerce_attribute' => 20,
		'woocommerce_cart_item_name' => 20,
		'woocommerce_cart_item_thumbnail' => 20,
		'woocommerce_order_subtotal_to_display' => 20,

		/* four-argument filters */
		'woocommerce_format_content' => 20,//function wc_format_content in woocommerce/includes/wc-formatting-functions.php

		//not in front
		//'woocommerce_email_get_option' => 0
	);

	foreach ( $use_filters as $name => $priority ) {
		add_filter( $name, 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', $priority );
	}

	//below do not seem to need

	//foreach ( $url_filters as $name => $priority ) {
	//	add_filter( $name, 'qtranxf_convertURL', $priority );
	//}

	/* Fix the product categories and tags (displayed above the "additional informations" tab) *
	add_filter( 'wp_get_object_terms', function ( $terms ) {
		foreach ( $terms as $term ) {
			if ( $term->taxonomy == 'product_cat' || $term->taxonomy == 'product_tag' ) {
				$term->name = qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage( $term->name );
			}
		}

		return $terms;
	} );

	/* Fix the product attributes (displayed in the "additional informations" tab) *
	add_filter( 'woocommerce_attribute', function ( $text ) {
		$values = explode( ', ', $text );
		foreach ( $values as $i => $val ) {
			$values[ $i ] = qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage( $val );
		}

		return implode( ', ', $values );
	} );
	*/
}
qwc_add_filters_front();

function qwc_filter_postmeta($original_value, $object_id, $meta_key = '', $single = false){
	//qtranxf_dbg_log_if($object_id==58,'qwc_filter_postmeta: $object_id='.$object_id.' $meta_key:',$meta_key);
	switch($meta_key){
		case '_product_attributes':
			return $original_value;
		default: return qtranxf_filter_postmeta($original_value, $object_id, $meta_key, $single);
	}
}

/**
 * Store the current WordPress language along with the order, so we know later on which language the customer used while ordering
 * Called with
 * do_action( 'woocommerce_checkout_update_order_meta', $order_id, $this->posted );
 * in /woocommerce/includes/class-wc-checkout.php
 * @since 1.1
 */
add_action( 'woocommerce_checkout_update_order_meta', 'save_post_qwc_store_language', 100 );
function save_post_qwc_store_language ( $order_id ) {
	global $q_config;
	add_post_meta( $order_id, '_user_language', $q_config['language'], true );
}
