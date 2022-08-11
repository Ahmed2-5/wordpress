<?php
/**
 *
 * @package Beorx Theme
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * 
 */

function beorx_child_scripts() {
   wp_enqueue_style( 'beorx-parent-style', get_template_directory_uri(). '/style.css');
   wp_enqueue_style( 'beorx-child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'beorx_child_scripts', 9999 );

function my_custom_scripts() {
   wp_enqueue_script( 'parent', get_stylesheet_directory_uri() . '/custom_script.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Service', 'text_domain' ),
		'archives'              => __( 'service Archives', 'text_domain' ),
		'attributes'            => __( 'service Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent service:', 'text_domain' ),
		'all_items'             => __( 'All services', 'text_domain' ),
		'add_new_item'          => __( 'Add New service', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New service', 'text_domain' ),
		'edit_item'             => __( 'Edit service', 'text_domain' ),
		'update_item'           => __( 'Update service', 'text_domain' ),
		'view_item'             => __( 'View service', 'text_domain' ),
		'view_items'            => __( 'View services', 'text_domain' ),
		'search_items'          => __( 'Search service', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'text_domain' ),
		'description'           => __( 'Service Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'custom_post_type', 0 );

function wpb_latest_actualite()
{
   global $wpdb;
   $return = '';
   $the_query = new WP_Query(array(
      'post_type' => 'service',
      'order' => 'desc',
      'orderby' => 'post_date',
   ));
   //  
   // The Loop
   if ($the_query->have_posts()) {
      $return .= '<div class="owl-slider">
        <div id="carousel" class="owl-carousel">
			';
      while ($the_query->have_posts()) {
         $the_query->the_post();
         $return .= ' 
	
         <div class="item">
		           <div class="service"> 
                       <a href="#" class="mt-4 h2 title-blog">' . get_the_title() . '</a>
		                 <p class="mt-2 text-extrait">' . wp_trim_words(get_the_content(), 30, '') . '</p>
		                 <div>  ' . get_the_post_thumbnail($post = null, $size = array(923, 498), $attr = '') . '</div>
                  </div>
          </div>
 ';
      }
      $return .= '	
		</div>
		</div>';
   }
   wp_reset_postdata();
   return $return;
}
add_shortcode('latest_actualite', 'wpb_latest_actualite');

