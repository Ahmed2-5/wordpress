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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><?php beorx_post_thumbnail(); ?></a>
                    <div class="card-body">
                        <div class="small text-muted"><span>  <img src="/wp-content/uploads/2022/07/date.svg"><?php the_time(get_option('date_format')) ?></span></div>
                        <h2 class="card-title h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(),10, ''); ?></p>
                        <a class="simple-btn-blog" href="<?php the_permalink(); ?>">Lire plus <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>


