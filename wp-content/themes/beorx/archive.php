<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beorx
 */

get_header();

if (is_active_sidebar('sidebar-1')) {
	$content_layout = 'col-lg-8';
} else {
	$content_layout = 'col-lg-12';
}
?>

<main id="primary" class="site-main">
	<?php
	get_template_part('template-parts/page-setting/' . 'breadcrumb');
	?>
	<div class="blog__standard section-padding">
		<div class="container">
			<div class="row">
				<div class="<?php echo esc_attr($content_layout); ?>">
					<div class="blog__standard-left">
						<?php
						if (have_posts()) :

							/* Start the Loop */
							while (have_posts()) :
								the_post();
								get_template_part('template-parts/content', get_post_type());

							endwhile;

							get_template_part('template-parts/' . 'pagination');

						else :
							get_template_part('template-parts/content', 'none');

						endif;
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
