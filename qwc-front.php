<?php
if(!defined('ABSPATH'))exit;

function qwc_add_filters_front() {

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
		'woocommerce_order_subtotal_to_display' => 20

		//not in front
		//'woocommerce_email_get_option' => 0
	);

	foreach ( $use_filters as $name => $priority ) {
		add_filter( $name, 'qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage', $priority );
	}

	//do not seem to need
	//foreach ( $url_filters as $name => $priority ) {
	//	add_filter( $name, 'qtranxf_convertURL', $priority );
	//}
}
qwc_add_filters_front();

?>
