<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function beorx_default_options() {
	
	$beorx_htmls = array(
		'a'      => array(
			'href'   => array(),
			'target' => array()
		),
		'strong' => array(),
		'small'  => array(),
		'span'   => array(),
		'p'      => array(),
		'h1'     => array(),
		'h2'     => array(),
		'h3'     => array(),
		'h4'     => array(),
		'h5'     => array(),
		'h6'     => array(),
	);
	return array (
		
	'footer-copyright'    => wp_kses(__( '&copy; 2022 - Beorx All Right Reserved', 'beorx' ), $beorx_htmls),
	'error-page-content'  => wp_kses(__( '<p>The page you are looking for does not exist. It might have been moved or deleted.</p>', 'beorx' ), $beorx_htmls),
	'error-page-title'    => esc_html__( '404', 'beorx' ),
	'error-page-subtitle'    => esc_html__( 'Sorry we Cant find that page!', 'beorx' ),
	'error-page-btn-text' => esc_html__( 'Back to Home', 'beorx' ),
	'blog-page-title'          => esc_html__( 'Blog', 'beorx' ), 
	'blog-cta-btn'          => esc_html__( 'Read More', 'beorx' ),
);
}


// Display from Theme Option beorx_option

if ( ! function_exists( 'beorx_option' ) ) {
	function beorx_option( $option = '', $default = null ) {
		$defaults = beorx_default_options();
		$options  = get_option('beorx_theme_options');
		$default  = ( ! isset( $default ) && isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : $default;
		return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
	}
}

/**
 * Enqueue Backend Styles And Scripts.
 **/

function beorx_icon_assets() {
	wp_enqueue_style( 'flaticon', get_theme_file_uri( 'assets/fonts/flaticon.css' ), array(), '1.0.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'beorx_icon_assets' );


if ( ! function_exists( 'beorx_custom_icons' ) ) {

	function beorx_custom_icons( $icons ) {

		// Adding new icons
		$icons[] = array(
			'title' => esc_html__( 'Custom Icon', 'beorx' ),
			'icons' => array(
				'flaticon-envelope'            => 'flaticon-envelope',
				'flaticon-call'                => 'flaticon-call',
				'flaticon-pin'                 => 'flaticon-pin',
				'flaticon-email'               => 'flaticon-email',
				'flaticon-clock'               => 'flaticon-clock',
			),
		);

		return $icons;
	}

	add_filter( 'csf_field_icon_add_icons', 'beorx_custom_icons' );
}