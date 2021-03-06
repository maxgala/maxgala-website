<?php

function norebro_register_plugins() {
	$plugins = array(
		array(
			'name' => 'WPBakery Page Builder',
			'slug' => 'js_composer',
			'source' => 'https://plugins.colabr.io/wpbakery_pagebuilder.zip',
			'required' => true,
			'version' => '5.6',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'ACF PRO',
			'slug' => 'acf',
			'source' => 'https://plugins.colabr.io/acf_pro.zip',
			'required' => true,
			'version' => '5.7.7',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
			'required' => true
		),
		// array(
		// 	'name' => 'YITH WooCommerce Wishlist',
		// 	'slug' => 'yith-woocommerce-wishlist',
		// 	'required' => false
		// ),
		array(
			'name' => 'Color and Image Swatches for Variable Product Attributes',
			'slug' => 'color-and-image-swatches-for-variable-product-attributes',
			'required' => false
		),
		array(
			'name' => 'Slider Revolution',
			'slug' => 'revslider',
			'source' => 'https://plugins.colabr.io/slider_revolution.zip',
			'required' => true,
			'version' => '5.4.8',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Portfolio',
			'slug' => 'norebro-portfolio',
			'source' => 'https://plugins.colabr.io/norebro-portfolio_v103.zip',
			'required' => true,
			'version' => '1.0.3',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Shortcodes and Widgets',
			'slug' => 'norebro-extra',
			'source' => 'https://plugins.colabr.io/norebro-extra_v1019.zip',
			'required' => true,
			'version' => '1.0.19',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'One Click Import',
			'slug' => 'one-click-demo-import',
			'required' => false
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => false
		),
		array(
			'name' => 'Contact Form 7 MailChimp Extension',
			'slug' => 'contact-form-7-mailchimp-extension',
			'required' => false
		),
		array(
			'name' => 'Envato Market',
			'slug' => 'envato-market',
			'source' => 'https://plugins.colabr.io/envato-market.zip',
			'required' => false,
			'version' => '2.0.0',
			'force_activation' => false,
			'force_deactivation' => false
		),
	);

	$config = array(
		'domain' => 'norebro',
		'default_path' => '',
		'menu' => 'install-required-plugins',
		'has_notices' => true,
		'is_automatic' => false,
		'message' => ''
	);
	
	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'norebro_register_plugins' );