<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );
/*
Plugin Name: WooCommerce Notices Fix
Description: Make WooCommerce Notices Compatible with all Cache Plugins using a Redirection with a ?woonotice=yes parameter and avoid to be cached.
Author: Julio Potier
Version: 0.1
Last Update: 19 Oct. 2014
*/

add_action( 'template_redirect', 'rkt_notice_with_get', 1 );
function rkt_notice_with_get() {
	if ( function_exists( 'wc_notice_count' ) && wc_notice_count() > 0 && ! isset( $_GET['woonotice'] ) ) {
		wp_redirect( add_query_arg( 'woonotice', 'yes' ) );
		die();
	}
}