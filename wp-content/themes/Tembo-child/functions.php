<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
	function chld_thm_cfg_locale_css($uri)
	{
		if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
			$uri = get_template_directory_uri() . '/rtl.css';
		return $uri;
	}
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

function my_custom_scripts()
{
	wp_enqueue_script('parent', get_stylesheet_directory_uri() . '/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

// END ENQUEUE PARENT ACTION
// Register Custom Post Type
function custom_post_type()
{

	$labels = array(
		'name'                  => _x('Evenvements', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Evenvement', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Evenvement', 'text_domain'),
		'name_admin_bar'        => __('Evenvement', 'text_domain'),
		'archives'              => __('Evenvements Archives', 'text_domain'),
		'attributes'            => __('Evenvements Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All evenvements', 'text_domain'),
		'add_new_item'          => __('Add New evenvement', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New evenvement', 'text_domain'),
		'edit_item'             => __('Edit evenvement', 'text_domain'),
		'update_item'           => __('Update evenvement', 'text_domain'),
		'view_item'             => __('View evenvement', 'text_domain'),
		'view_items'            => __('View evenvements', 'text_domain'),
		'search_items'          => __('Search evenvement', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into evenvement', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this evenvement', 'text_domain'),
		'items_list'            => __('evenvements list', 'text_domain'),
		'items_list_navigation' => __('evenvements list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter evenvements list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Evenvement', 'text_domain'),
		'description'           => __('Post Type Description', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('page-attributes', 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats',),
		'taxonomies'            => array('category', 'post_tag'),
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
		'menu_icon' => 'dashicons-calendar-alt',
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('evenvement', $args);
}
add_action('init', 'custom_post_type', 0);

/****************************** Evenement *************************************/

function wpb_evenement()
{
	$return = '';
	$the_query = new WP_Query(array(

		'post_type' => 'evenvement',
		'posts_per_page' => 3,
		'order' => 'desc',
		'orderby' => 'post_date',
	));
	// The Loop
	$return .= '';
	if ($the_query->have_posts()) {

		$return .= '
        <section class="container post-evenement-all">
		<h1 class="h-evenement mb-3">Évènements À Venir</h1>
        <div class="row">';
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$category = get_the_category();

			$return .= '  
  <div class="col-lg-12 post-evenement">
    <p class="title-event "><a href="' . get_the_permalink() . '">' . substr(get_the_title(), 0, 70) . '</a></p>
	<span>' . get_field('date') . '</span>
	<hr class="hr-event">
  </div>';
		}
		$return .= '</div></div>
		<div class="btn-event">
		<button><a href="/actualites/"> Voir Plus</a> </button>
		</div>
        </section>';
	} else {
		$return .= '
        <section class="container post-evenement-all">
		<h1 class="h-evenement">Évènements À Venir</h1>
        <div class="row">  
  <div class="col-lg-12 post-evenement">
    <h3> Sorry, no Eventements were found </h3>
	
	<hr class="hr-event">
  </div>';

		$return .= '</div></div>
		<div class="btn-event">
		<button><a href="/actualites/"> Voir Plus</a> </button>
		</div>
        </section>';
	}
	wp_reset_postdata();
	return $return;
}
add_shortcode('event', 'wpb_evenement');

/*********************** Teams  *************************/
// Register Custom Post Type
function custom_post_type_teams()
{

	$labels = array(
		'name'                  => _x('teams', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('team', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Teams', 'text_domain'),
		'name_admin_bar'        => __('Teams', 'text_domain'),
		'archives'              => __('Item Archives', 'text_domain'),
		'attributes'            => __('Item Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Item:', 'text_domain'),
		'all_items'             => __('All Teams', 'text_domain'),
		'add_new_item'          => __('Add New Team', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Team', 'text_domain'),
		'edit_item'             => __('Edit Team', 'text_domain'),
		'update_item'           => __('Update Team', 'text_domain'),
		'view_item'             => __('View Team', 'text_domain'),
		'view_items'            => __('View Teams', 'text_domain'),
		'search_items'          => __('Search Team', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Teams list', 'text_domain'),
		'items_list_navigation' => __('Teams list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter ieams list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('team', 'text_domain'),
		'description'           => __('teams Description', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array('category', 'post_tag'),
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
		'menu_icon' => 'dashicons-groups',

		'capability_type'       => 'page',
	);
	register_post_type('teams', $args);
}
add_action('init', 'custom_post_type_teams', 0);

function wpb_latest_teams()
{
	global $wpdb;
	$return = '';
	$the_query = new WP_Query(array(
		'post_type' => 'teams',
		'order' => 'ASC',
		'orderby' => 'post_date',
		'posts_per_page' => -1,

	));
	// The Loop
	if ($the_query->have_posts()) {
		$return .= '<div class="owl-slider our-team">
        <div id="carousel" class="owl-carousel">
			';
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$return .= ' 
		 <div class="row">
         <div class="item col-lg-12 col-md-12">				 
				<div class="member">    
				 <div class="img-services">' . get_the_post_thumbnail($post = null, $size = 'full', array('class' => 'img-fluid'), $attr = '') . ' </div>
				  </div>
				  <div class="member-info">
				  <div class="member-detail">
					  <h4>' .get_the_title() . '</h4>
					  <span>' . get_field('post') . '</span>
				  </div>
			  </div>
			 
          </div>
		  </div>';
		}
		$return .= '</div></div>';
	}
	wp_reset_postdata();
	return $return;
}
add_shortcode('latest_teams', 'wpb_latest_teams');


function wpb_latest_event()
{
	global $wpdb;
	$return = '';
	$the_query = new WP_Query(array(
		'post_type' => 'evenvement',
		'order' => 'ASC',
		'orderby' => 'post_date',
		'posts_per_page' => 3,

	));
	// The Loop
	if ($the_query->have_posts()) {
		$return .= '<div class="owl-slider">
        <div id="carousel" class="owl-carousel owl-carousel-2">
			';
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$return .= ' 
			<div class="row">
			<div class="item col-lg-12 col-md-12 col-sm-12">
			<!-- Blog post-->
			<div class="card mb-4">
				<a href="#!">' . get_the_post_thumbnail($post = null, $size = array(100, 100), $attr = '') . ' </a>
				<div class="card-body">
				<p class="title-event "><a href="' . get_the_permalink() . '">' . substr(get_the_title(), 0, 70) . '</a></p>

				<div class="row body-entete">
					<div class="small text-event-blog col"><span>  <img src="/wp-content/uploads/2022/07/date.svg">' . get_field('date') . '</span></div>
					<div class="small second-text-event-blog col"><span>  <img src="/wp-content/uploads/2022/07/ville.svg">' . get_field('ville') . '</span></div>
				</div>
					<h2 class="card-title h4"><a href="' . get_the_permalink() . '"><?php the_title(); ?></a></h2>
					<p class="card-text">' . wp_trim_words(get_the_excerpt(), 10, '') . '</p>
				</div>
			</div>
		</div>



			 </div>';
		}
		$return .= '</div></div>';
	}
	wp_reset_postdata();
	return $return;
}
add_shortcode('latest_event', 'wpb_latest_event');


// Register Custom Post Type
function custom_partenaire_type()
{

	$labels = array(
		'name'                  => _x('Partenaires', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Partenaire', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Partenaire', 'text_domain'),
		'name_admin_bar'        => __('Partenaire', 'text_domain'),
		'archives'              => __('Partenaire Archives', 'text_domain'),
		'attributes'            => __('Partenaire Attributes', 'text_domain'),
		'parent_item_colon'     => __('Parent Partenaire:', 'text_domain'),
		'all_items'             => __('All Partenaires', 'text_domain'),
		'add_new_item'          => __('Add New Partenaire', 'text_domain'),
		'add_new'               => __('Add New', 'text_domain'),
		'new_item'              => __('New Partenaire', 'text_domain'),
		'edit_item'             => __('Edit Partenaire', 'text_domain'),
		'update_item'           => __('Update Partenaire', 'text_domain'),
		'view_item'             => __('View Partenaire', 'text_domain'),
		'view_items'            => __('View Partenaires', 'text_domain'),
		'search_items'          => __('Search Partenaire', 'text_domain'),
		'not_found'             => __('Not found', 'text_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
		'featured_image'        => __('Featured Image', 'text_domain'),
		'set_featured_image'    => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image'    => __('Use as featured image', 'text_domain'),
		'insert_into_item'      => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list'            => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list'     => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Partenaire', 'text_domain'),
		'description'           => __('Partenaire Description', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
		'taxonomies'            => array('category', 'post_tag'),
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
	register_post_type('Partenaire', $args);
}
add_action('init', 'custom_partenaire_type', 0);

function wpb_first_partenaire()
{
	global $wpdb;
	$return = '';
	$the_query = new WP_Query(array(
		'post_type' => 'partenaire',
		'order' => 'ASC',
		'orderby' => 'post_date',
		'posts_per_page' => -1,

	));
	// The Loop
	if ($the_query->have_posts()) {
		$return .= '<div class="slider slider-nav col-lg-4 col-md-12 col-sm-12">';
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$return .= ' 
			<div class="img-partenaire">
			' . get_the_post_thumbnail($post = null, 'full', $attr = '') . '
		</div>

';
		}
		$return .= ' </div>
			';
	}
	wp_reset_postdata();
	return $return;
}
add_shortcode('first_partenaire', 'wpb_first_partenaire');

function wpb_second_partenaire()
{
	global $wpdb;
	$return = '';
	$the_query = new WP_Query(array(
		'post_type' => 'partenaire',
		'order' => 'ASC',
		'orderby' => 'post_date',
		'posts_per_page' => -1,

	)); ?>
	<?php if ($the_query->have_posts()) { ?>
		<div class="slider slider-for col-lg-8 col-md-12 col-sm-12 all-services">
			<?php while ($the_query->have_posts()) {
				$the_query->the_post(); ?>

				<div class="col-lg-12">
					<h3><?php echo substr(get_the_title(), 0, 70); ?></h3>
					<p><?php echo get_the_content() ?></p>
					<div class="row card-service">
					<?php if( get_field('service_1') ): ?>
							<div class="col-lg-3 col-md-5 col-sm-12 col-partenair-card">
								<h4><?php the_field('service_1'); ?></h4>
							</div>
					<?php endif; ?>
					<?php if( get_field('service_2') ): ?>
							<div class="col-lg-3 col-md-5 col-sm-12 col-partenair-card">
								<h4><?php the_field('service_2'); ?></h4>
							</div>
					<?php endif; ?>
					<?php if( get_field('service_3') ): ?>
							<div class="col-lg-3 col-md-5 col-sm-12 col-partenair-card">
								<h4><?php the_field('service_3'); ?></h4>
							</div>
					<?php endif; ?>
					<?php if( get_field('service_4') ): ?>
							<div class="col-lg-3 col-md-5 col-sm-11 col-partenair-card">
								<h4><?php the_field('service_4'); ?></h4>
							</div>
					<?php endif; ?>
					<?php if( get_field('service_5') ): ?>
							<div class="col-lg-3 col-md-5 col-sm-12 col-partenair-card">
								<h4><?php the_field('service_5'); ?></h4>
							</div>
					<?php endif; ?>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="slider-bar">
			<div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
				<span class="slider__label sr-only">
			</div>
		</div>
	<?php }
	wp_reset_postdata();
	return $return;
}
add_shortcode('second_partenaire', 'wpb_second_partenaire');

function respsavoirShortcode()
{
	ob_start();

	?>
	<div class="container">
		<div class="main-services row">
				<?php echo do_shortcode("[first_partenaire]"); ?>
			<?php echo do_shortcode("[second_partenaire]"); ?>
		</div>
	</div>
<?php
	return ob_get_clean();
}
add_shortcode('respsavoirSh', 'respsavoirShortcode');



function Service_shortcode()
{
	ob_start();

	?>
	<div class="container">
	<div class="owl-slider">
        <div id="carousel_two" class="owl-carousel">
		<?php
			$hero = get_field('service_1');
			$image = get_field('image');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)

			if( $hero ): ?>
				<a href="/services/"><div class="item">
	<img class="service_logo"  src="<?php echo esc_url( $hero['image']); ?>" alt="">
	<img class="service_logo_hover"  src="<?php echo esc_url( $hero['image_hover'] ); ?>" alt="">
					<h5> <?php echo $hero['title']; ?></h5>
		</div></a>
		<?php endif; ?>
		<?php
			$hero2 = get_field('service_2');
			if( $hero2 ): ?>
				<a href="/services/"><div class="item item-2">
					<img class="service_logo "  src="<?php echo esc_url( $hero2['image'] ); ?>" alt="">
					<img class="service_logo_hover "  src="<?php echo esc_url( $hero2['image_hover'] ); ?>" alt="">
					<h5> <?php echo $hero2['title']; ?></h5>
		</div>
				</a>
		<?php endif; ?>
		<?php
			$hero3 = get_field('service_3');
			if( $hero3 ): ?>
				<a href="/services/"><div class="item">
					<img class="service_logo"  src="<?php echo esc_url( $hero3['image'] ); ?>" alt="">
					<img class="service_logo_hover"  src="<?php echo esc_url( $hero3['image_hover'] ); ?>" alt="">
					<h5> <?php echo $hero3['title']; ?></h5>
		</div>
				</a>
		<?php endif; ?>
		</div>
	</div>
	</div>
<?php
	return ob_get_clean();
}
add_shortcode('servi_shortcode', 'Service_shortcode');