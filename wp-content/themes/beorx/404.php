<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package beorx
 */
$beorx_error_content = beorx_option('error-page-content');
$beorx_error_btn = beorx_option('error-page-btn', true);
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
get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<?php
		get_template_part('template-parts/page-setting/' . 'breadcrumb');
		?>


		<!-- Error Area Start -->
		<div class="error__area site-content-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="error__area-title t-center">
							<h1><?php echo esc_html(beorx_option('error-page-title')); ?></h1>
							<h3 class="mb-20"><?php echo esc_html(beorx_option('error-page-subtitle')); ?></h3>
							<?php echo wp_kses($beorx_error_content, $beorx_htmls);	?>
							<?php if ($beorx_error_btn  == 'yes') : ?>
								<a class="theme-btn mt-30" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(beorx_option('error-page-btn-text')); ?> <i class="flaticon-arrow-right"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Error Area End -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
