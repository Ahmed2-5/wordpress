<?php
/**
 * Enqueue scripts and styles.
 */
/**
 * Enqueue scripts and styles.
 */
function beorx_scripts() {

    if( !class_exists( 'CSF' ) ) {
        // load default google fonts
        wp_enqueue_style('beorx-default-fonts', "//fonts.googleapis.com/css?family=Inter:400,500,600,700|DM+Serif+Display:400", '', '1.0.0', 'screen');
    }  
    wp_enqueue_style ( 'bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'fontawesome', get_theme_file_uri('/assets/fonts/fontawesome/css/all.min.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'animate', get_theme_file_uri('/assets/css/animate.min.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'meanmenu', get_theme_file_uri('/assets/css/meanmenu.min.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'swiper-bundle', get_theme_file_uri('/assets/css/swiper-bundle.min.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'magnific-popup', get_theme_file_uri('/assets/css/magnific-popup.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'nice-select', get_theme_file_uri('/assets/css/nice-select.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'flaticon', get_theme_file_uri('/assets/fonts/flaticon.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'beorx-theme', get_theme_file_uri('/assets/css/theme.css'), null, BEORX_VERSION );
    wp_enqueue_style ( 'beorx-main', get_theme_file_uri('/assets/css/main.css'), null, BEORX_VERSION );
	wp_enqueue_style ( 'beorx-style', get_stylesheet_uri(), array(), BEORX_VERSION );

    wp_enqueue_script( 'bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'popper', get_theme_file_uri('/assets/js/popper.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'swiper-bundle', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'nice-select', get_theme_file_uri('/assets/js/jquery.nice-select.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'magnific-popup', get_theme_file_uri('/assets/js/jquery.magnific-popup.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'progressbar', get_theme_file_uri('/assets/js/progressbar.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'meanmenu', get_theme_file_uri('/assets/js/jquery.meanmenu.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'wow', get_theme_file_uri('/assets/js/wow.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'counterups', get_theme_file_uri('/assets/js/jquery.counterup.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri('/assets/js/jquery.waypoints.min.js'), array('jquery'), BEORX_VERSION, true );
    wp_enqueue_script( 'beorx-custom', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), BEORX_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
   
}
add_action( 'wp_enqueue_scripts', 'beorx_scripts' );
