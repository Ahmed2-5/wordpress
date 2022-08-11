<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function beorx_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Right Sidebar', 'beorx'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'beorx'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	$footer_column = beorx_option('footer_column', 'col-lg-4');

	register_sidebar(
		array(
			'name'          => esc_html__('Default Footer', 'beorx'),
			'id'            => 'footer-1',
			'description'   => esc_html__('Add widgets here.', 'beorx'),
			'before_widget' => '<div id="%1$s" class="widget ' . esc_attr($footer_column) . ' col-md-6 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'beorx_widgets_init');
