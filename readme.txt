=== WooCommerce & qTranslate-X ===
Developed by: qTranslate Team
Contributors: johnclause
Tags: multilingual, language, bilingual, i18n, l10n, multilanguage, translation, WooCommerce
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.0
License: GPLv3 or later
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QEXEK3HX8AR6U
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Enables multilingual framework for plugin "WooCommerce - excelling eCommerce".

== Description ==

This plugin enables [qTranslate-X](https://wordpress.org/plugins/qtranslate-x/) multilingual framework for WordPress plugin [WooCommerce - excelling eCommerce](https://wordpress.org/plugins/woocommerce/).

After the activation, depending on your theme, you may need to do the following additional steps to finalize the configuration.

1) In all customizable template files, replace calls to `bloginfo('xxx')` with `bloginfo('xxx','display')`, if you have any.

2) This plugin enables qTranslate-X's Language Switching Buttons on WooCommerce configuration pages, where it is applicable. Unfortunately, WooCommerce code is not flexible enough to allow all the filters we would need. We are in contact with WooCommerce to resolve the issue. For now, you would need to adjust their code in one line of file `/wp-content/plugins/woocommerce/includes/emails/class-wc-email.php`. Search for the following piece of code
<pre>
	public function get_option( $key, $empty_value = null ) {
		return apply_filters( 'woocommerce_email_get_option', __( parent::get_option( $key, $empty_value ) ), $this );
	}
</pre>
and replace it with
<pre>
	public function get_option( $key, $empty_value = null ) {
		return apply_filters( 'woocommerce_email_get_option', parent::get_option( $key, $empty_value ) );
	}
</pre>
which removes excessive call to translation function `__()`. This affects translation of e-mail templates. If you prefer to send all e-mails in the default language, then you do not need to do the above modification.

This plugin is not supported by the authors on the WordPress forum due to its simplicity. If you find a field which is not translatable, follow the pattern how it is done in the code for other fields and make it translatable. Then submit a pull request at [GitHub](https://github.com/qTranslate-Team/woocommerce-qtranslate-x) to enable your changes for everyone else.

== Installation ==

Standard, as any other normal plugin hosted at WordPress.

== Screenshots ==

Plugin does not have any configuration options, and no screenshots needed.

== Frequently Asked Questions ==

= How do I open a page with configuration options? = 

Plugin does not have any configuration options, simply activate it and it will enable the translation of relevant fields for WooCommerce back- and front-end.

= I submitted a question on support forum, but the authors did not respond? = 

This plugin is not supported by the authors on the WordPress forum due to its simplicity. If you find a field which is not translatable, follow the pattern how it is done in the code for other fields, and make it translatable. Then submit a pull request at [GitHub](https://github.com/qTranslate-Team/woocommerce-qtranslate-x) to enable your changes for everyone else.


== Upgrade Notice ==

No need for Upgrade Notice.

== Changelog ==

= 1.0 =
* Initial release
