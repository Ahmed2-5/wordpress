<?php
$enable_bread = beorx_option('banner-breadcrumb', true);

?>
<!-- Page Banner Area Start -->
<div class="page__banner">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="page__banner-content">

					<?php if (is_home()) { ?>
						<div class="page-header-content">
							<h2><?php echo esc_html(beorx_option('blog-page-title')); ?></h2>
						</div>
					<?php } elseif (is_front_page()) { ?>
						<div class="page-header-content">
							<h2><?php single_post_title(); ?></h2>
						</div>							
					<?php } elseif (is_single()) { ?>
						<div class="page-header-content">
							<h2><?php single_post_title(); ?></h2>
							<?php if ($enable_bread == 'yes') : ?>
								<ul class="mt-10">
									<li>
										<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'beorx'); ?></a>
										<i class="fas fa-chevron-right"></i>
									</li>
									<li><?php single_post_title(); ?></li>
								</ul>
							<?php endif; ?>
						</div>
					<?php } elseif (is_archive()) { ?>
						<div class="page-header-content archive-page-header">
							<h2><?php the_archive_title(); ?></h2>
						</div>
					<?php } elseif (is_404()) { ?>
						<div class="page-header-content text-center">
							<h2><?php esc_html_e('Page Not Found', 'beorx'); ?></h2>
						</div>
					<?php } elseif (is_search()) { ?>
						<div class="page-header-content search-page-header">
							<h2>
								<?php
								printf(esc_html__('Search Results for: %s', 'beorx'), '<span>' . get_search_query() . '</span>');
								?>
							</h2>
						</div>
					<?php } else { ?>
						<div class="page-header-content">
							<h2><?php single_post_title(); ?></h2>
							<?php if ($enable_bread == 'yes') : ?>
								<ul class="mt-10">
									<li>
										<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'beorx'); ?></a>
										<i class="fas fa-chevron-right"></i>
									</li>
									<li><?php single_post_title(); ?></li>
								</ul>
							<?php endif; ?>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner Area End -->