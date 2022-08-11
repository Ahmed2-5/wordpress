<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package beorx
 */

get_header();
if (is_active_sidebar('sidebar-1')) {
	$content_layout = 'col-lg-8';
} else {
	$content_layout = 'col-lg-12';
}
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
	<div class="site-content-padding blog__details">
		<div class="container">
			<div class="row">
				<div class="<?php echo esc_attr($content_layout); ?>">
					<div class="blog__details-left">
						<?php
						while (have_posts()) :
							the_post();

							get_template_part('template-parts/content', 'single');


							// If comments are open or we have at least one comment, load up the comment template.
							if (comments_open() || get_comments_number()) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>

				<?php
				if (is_active_sidebar('sidebar-1')) { ?>
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				<?php
				}

				?>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php

get_footer();
