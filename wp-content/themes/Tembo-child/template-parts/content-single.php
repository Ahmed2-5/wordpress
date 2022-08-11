<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beorx
 */
$post_date = beorx_option('blog-single-date', true);
$post_author = beorx_option('blog-single-author', true);
$post_comment = beorx_option('blog-single-comment', true);
?>

<div class="blog__details-left-image">
	<?php beorx_post_thumbnail(); ?>
</div>
<div class="blog__details-left-content">
	<div class="blog__details-left-content-meta">

		<ul>

			<?php if ($post_author == 'yes') : ?>
				<li><i class="far fa-user"></i><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
						<?php the_author(); ?>
					</a>
				</li>
			<?php endif; ?>

			<?php if ($post_date == 'yes') : ?>
				<li><span><i class="far fa-calendar-check"></i><?php the_time(get_option('date_format')) ?></span></li>
			<?php endif; ?>

			<?php if (get_comments_number() != 0 && $post_comment == 'yes') : ?>
				<li><?php beorx_comment_number(); ?></li>
			<?php endif; ?>
		</ul>
	</div>

</div>
<div class="entry-content pt-15">
	<?php
	the_content();
	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'beorx'),
			'after'  => '</div>',
		)
	);
	?>
</div>
<?php if (has_tag()) : ?>
	<div class="blog__details-left-related mb-50">
		<div class="row align-items-baseline">
			<div class="col-lg-12">
				<div class="blog__details-left-related-tag d-inline-flex align-items-baseline">
					<?php beorx_entry_footer(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>