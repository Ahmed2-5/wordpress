<?php

/**
 * Template Name: Page Builder Support 
 *
 * @package beorx
 * @since 1.0
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

		<?php
		while (have_posts()) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>
	</div>

</main><!-- #main -->

<?php
get_footer();
