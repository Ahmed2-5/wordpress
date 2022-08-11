<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beorx
 */

get_header();

if (get_post_meta($post->ID, 'beorx_meta_options', true)) {
	$beorx_meta = get_post_meta($post->ID, 'beorx_meta_options', true);
} else {
	$beorx_meta = array();
}
if (array_key_exists('banner-header-show', $beorx_meta)) {
	$enable_banner = $beorx_meta['banner-header-show'];
} else {
	$enable_banner = 'yes';
}
?>

<main id="primary" class="site-main">
	<?php
	if ($enable_banner == 'yes') :
		get_template_part('template-parts/page-setting/' . 'breadcrumb');
	endif;
	?>

<div class="site-content-padding">
   <div class="container">
		<div class="row">
			<div class="col-xl-12">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'page');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</div>

</main><!-- #main -->

<?php
get_footer();
