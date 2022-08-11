<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beorx
 */
$post_date = beorx_option('blog-list-date', true);
$post_author = beorx_option('blog-list-author', true);
$post_comment = beorx_option('blog-list-comment', true);
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog__standard-left-item">
		<div class="blog__standard-left-item-image">
			<?php beorx_post_thumbnail(); ?>
		</div>
		<div class="blog__standard-left-item-content">
			<div class="blog__standard-left-item-content-meta">
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
			<?php if(get_the_title ()):?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php endif;?>
			<p class="mb-20"><?php echo get_the_excerpt(); ?></p>
			<a class="simple-btn" href="<?php the_permalink(); ?>"><?php echo esc_html(beorx_option('blog-cta-btn')); ?></a>
		</div>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->