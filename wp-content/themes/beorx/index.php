<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
	<div class="site-content-padding blog__standard">
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
							
						else :
							get_template_part('template-parts/content', 'none');

						endif;
						?>
					</div>
					<?php get_template_part('template-parts/' . 'pagination'); ?>
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
