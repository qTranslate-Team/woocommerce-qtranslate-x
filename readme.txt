# WooCommerce & qTranslate-X #
Developed by: qTranslate Team
Contributors: johnclause, michelweimerskirch
Tags: multilingual, language, bilingual, i18n, l10n, multilanguage, translation, WooCommerce
Requires at least: 4.0
Tested up to: 4.4
Stable tag: 1.3
License: GPLv3 or later
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QEXEK3HX8AR6U
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Enables multilingual framework for plugin "WooCommerce - excelling eCommerce".

## Description ##

This plugin enables [qTranslate-X](https://wordpress.org/plugins/qtranslate-x/) multilingual framework (version 3.4.6.1 or later) for WordPress plugin [WooCommerce - excelling eCommerce](https://wordpress.org/plugins/woocommerce/) (version 2.3.5 or later).

After the activation, depending on your theme, you may need to do the following additional step to finalize the configuration:

* In all customizable template files, replace calls to `bloginfo('xxx')` with `bloginfo('xxx','display')`, if you have any. You do not have to do this, if title of your blog appears correctly everywhere you can see it (especially in emails sent), or if you do not localize the name of your blog.

This plugin is not supported by the authors on the WordPress forum due to its simplicity. If you find a field which is not translatable, follow the pattern how it is done in the code for other fields and make it translatable. Then submit a pull request at [GitHub](https://github.com/qTranslate-Team/woocommerce-qtranslate-x) to enable your changes for everyone else.

Is is a very good idea to review "[Known Issues](https://wordpress.org/plugins/woocommerce-qtranslate-x/other_notes/)" in order to have right expectations.

## Installation ##

Standard, as any other normal plugin hosted at WordPress.

After the activation, depending on your theme, you may need to do the following additional step to finalize the configuration:

* In all customizable template files, replace calls to `bloginfo('xxx')` with `bloginfo('xxx','display')`, if you have any. You do not have to do this, if title of your blog appears correctly everywhere you can see it (especially in emails sent), or if you do not localize the name of your blog.

## Screenshots ##

Plugin does not have any configuration options, and no screenshots needed.

## Frequently Asked Questions ##

### How do I open a page with configuration options? ###
Plugin does not have any configuration options, simply activate it and it will enable the translation of relevant fields for WooCommerce back- and front-end.

### I submitted a question on support forum, but the authors did not respond? ###
This plugin is not supported by the authors on the WordPress forum due to its simplicity. If you find a field which is not translatable, follow the pattern how it is done in the code for other fields, and make it translatable. Then submit a pull request at [GitHub](https://github.com/qTranslate-Team/woocommerce-qtranslate-x) to enable your changes for everyone else.

## Upgrade Notice ##

### 1.3 ###
This version recovers compatibility with the latest qTranslate-X 3.4.6.2.

## Known Issues ##
* Product Attribute may need to be re-saved (page `/wp-admin/edit.php?post_type=product&page=product_attributes&edit=xxx`) if they were created before installing this plugin: [WP Topic](https://wordpress.org/support/topic/how-to-translate-attribute-items-in-woocommerce?replies=1).
* Product Attribute values are shown in admin language and do not respond to LSB. This is a convinience feature, which needs more work to be intergarated, but otherwise it is functional and usable.
* Custom Product Attributes (which are entered directly on product edit page `/wp-admin/post.php?post=xxx&action=edit`) have to be entered in raw multilingual text, with values like `[:en]EN Val1[:de]DE Val1[:] | [:en]EN Val2[:de]DE Val2[:]`, leaving separator '|' outside of language tags. This piece has not yet been integrated on admin side, but once all is entered in raw multilingual format, it should work well at front end. Delete and freshly re-create an attribte under this plugin, if it was created before installing this plugin and it misbehaves.
* Admin e-mails sent by pressing one of the buttons in column 'Actions' on order list page, `/wp-admin/edit.php?post_type=shop_order`, go in the original customer language used to submit the order. However, same e-mails sent using the "Resend order emails" option in order editor page, `/wp-admin/post.php?post=nnn&action=edit`, go in the mixed  language of admin and customer. As a workaround, you can switch the admin language to the customer language before resending an e-mail (which shouldn't happen too often).
* Use raw multilingual format with language tags `[:en]...[:]` or `{:en}...{:}` in any regualar field, which you wish to be multilingual. It most likely will be translated at front end appropriately. Report the field at [GitHub](https://github.com/qTranslate-Team/woocommerce-qtranslate-x/issues) if you found one that does not get translated at front end. Already known fileds: all fields on "Variable Product/Variations" section.

## Former Known Issues ##
* [Resolved in ver. 1.2] HTML header title on admin page `/wp-admin/edit-tags.php?taxonomy=xxx&post_type=product` displays raw multilingual values.
* [Resolved in ver. 1.2] Two buttons, "Add New XXX" and "Search XXX", on attribute editor page, `/wp-admin/edit-tags.php?taxonomy=xxx&post_type=product`, are displayed with raw multilingual text. This should be fixed with a later 

## Changelog ##

### 1.3 ###
* Improvement: A copule of new multilingual fields.
* Fix: compatibility with the latest qTranslate-X 3.4.6.1 or later.

### 1.2 ###
* Improvement: Gateway names are translated on page `/wp-admin/admin.php?page=wc-settings&tab=checkout`.
* Improvement: page /wp-admin/admin.php?page=wc-settings&tab=email&section=wc_email_customer_refunded_order [Pull Request #17](https://github.com/qTranslate-Team/woocommerce-qtranslate-x/issues/17).

### 1.1 ###
* Improvement: during an order, the language currently used by the customer is stored along with the order meta data
* Improvement: complete order e-mails on admin side are now sent with the order's original language (only for orders made after this update). [[Issue #3]( https://github.com/qTranslate-Team/woocommerce-qtranslate-x/issues/3)]

### 1.0.1 ###
* Improvement: display of fields of class 'attribute_name' in `post.php` page.
* Improvement: added filter 'woocommerce_format_content', subject to approval from Woocommerce - was already approved, wait for next release after 2.3.5 - done by now.
* Fix: problem with custom attributes: [Issue #2](https://github.com/qTranslate-Team/woocommerce-qtranslate-x/issues/2).

### 1.0 ###
* Initial release
