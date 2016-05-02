# WooCommerce & qTranslate-X #
Developed by: qTranslate Team
Contributors: johnclause, michelweimerskirch
Tags: multilingual, language, bilingual, i18n, l10n, multilanguage, translation, WooCommerce
Requires at least: 4.0
Tested up to: 4.5
Stable tag: 1.3.1
License: GPLv3 or later
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QEXEK3HX8AR6U
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Enables multilingual framework for plugin "WooCommerce - excelling eCommerce".

## Description ##

This plugin enables [qTranslate-X](https://wordpress.org/plugins/qtranslate-x/) multilingual framework (version 3.4.6.1 or later) for WordPress plugin [WooCommerce - excelling eCommerce](https://wordpress.org/plugins/woocommerce/) (version 2.3.5 or later).

After the activation, depending on your theme, you may need to do the following additional step to finalize the configuration:

* In all customizable template files, replace calls to `bloginfo('xxx')` with `bloginfo('xxx','display')`, if you have any. You do not have to do this, if title of your blog appears correctly everywhere you can see it (especially in emails sent), or if you do not localize the name of your blog.

This plugin is not supported by the authors on the WordPress forum due to its simplicity. If you find a field which is not translatable, follow the pattern how it is done in the code for other fields and make it translatable. Then submit a pull request at [GitHub](https://github.com/qTranslate-Team/woocommerce-qtranslate-x) to enable your changes for everyone else.

A few relevalt lists are maintaine at qTranslate-explained website, such as

* "[Frequently Asked Questions](https://qtranslatexteam.wordpress.com/woocommerce-qtranslate-x-faq/)"
* "[Known Issues](https://qtranslatexteam.wordpress.com/woocommerce-qtranslate-x-known-issues/)"


## Installation ##

Standard, as any other normal plugin hosted at WordPress.

After the activation, depending on your theme, you may need to do the following additional step to finalize the configuration:

* In all customizable template files, replace calls to `bloginfo('xxx')` with `bloginfo('xxx','display')`, if you have any. You do not have to do this, if title of your blog appears correctly everywhere you can see it (especially in emails sent), or if you do not localize the name of your blog.
* You may need to [re-save Product Attributes](https://qtranslatexteam.wordpress.com/woocommerce-qtranslate-x-faq/#CustomProductAttributeOnInstall).


## Screenshots ##

Plugin does not have any configuration options, and no screenshots needed.


## Frequently Asked Questions ##

The list of Frequently Asked Questions is maintained at [qTranslate-explaned website](https://qtranslatexteam.wordpress.com/woocommerce-qtranslate-x-faq).

It is also a good idea to review the list of [Known Issues](https://qtranslatexteam.wordpress.com/woocommerce-qtranslate-x-known-issues) in order to have correct expectatons.


## Changelog ##

### 1.3.1 ###
* Improvement: Field "Purchase Note" on "Advanced" tab of Product editting page is now multilingual.
* Improvement: Translation of column "Category" in product list on page '/wp-admin/edit.php?post_type=product'.

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


## Upgrade Notice ##

### 1.3 ###
This version recovers compatibility with the latest qTranslate-X 3.4.6.2.
