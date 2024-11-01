=== WooCommerce Notices Fix ===
Contributors: juliobox, geekpress, wp_media
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KJGT942XKWJ6W
Tags: woocommerce, notices, hotfix
Requires at least: 1.5.1
Tested up to: 4.0
Stable tag: trunk

Make WooCommerce Notices Compatible with all Cache Plugins using a Redirection with a ?woonotice=yes parameter and avoid to be cached.

== Description ==
Make WooCommerce Notices Compatible with all Cache Plugins using a Redirection with a ?woonotice=yes parameter and avoid to be cached.

== Installation ==

1. Upload the *plugin* to the *"/wp-content/plugins/"* directory
1. Activate the plugin through the *"Plugins"* menu in WordPress
1. Done.

== Frequently Asked Questions ==
1. Which Notices are you talking about?
Some themes are using the dedicated WooCommerce hooks named 'woocommerce_before_shop_loop' & 'woocommerce_before_single_product'.
The problem is that WooCommerce will print its notices in PHP.
If you're using a caching plugin, like WP Rocket, or you won't get the notices, or the notices will be stored into the cached files.

1. Ok, so what kind of fix this is?
I detect when WooCommerce need to print a notices, then i reload the same URL adding a GET parameter, this tip avoid pages to be cached or read from cache.

== Screenshots ==
none

== Changelog ==

= 0.1 =
* 19 oct 2014
* First release

== Upgrade Notice ==
none