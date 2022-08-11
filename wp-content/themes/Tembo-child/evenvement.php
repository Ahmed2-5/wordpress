<?php

/**
 * Template Name: Evenvement
 * Template Post Type:evenvement
 *
 * Template for displaying an ad.
 *
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>

<?php if (have_posts()) { ?>
    <!-- Header-->
    <header class="header-event">
        <div class="container px-4">
            <h1 class="title-page-event">évènements</h1>
            <p class="desc-page-event">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </header>
    <div class="container mt-5 event-single-page">
        <div class="row">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Preview image figure-->
                        <figure class="mb-4 img-single-event"><?php the_post_thumbnail('full'); // Original image resolution (unmodified)
                                                ?></figure>
                        <!-- Post content-->
                        <section class="mb-5 text-event">
                            <p class="fs-5 mb-4"> <?php the_content(); ?></p>
                        </section>
                    </article>
                    <!-- Comments section-->
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4 ">
                    <!-- Side widget-->
                    <section class="mb-4 post-evenement-all single-post-event-all">
                        <h1 class="h-post-evenement mb-5">Détails de l'évènement</h1>
                        <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <img src="/wp-content/uploads/2022/07/date.svg">
                                </div>
                                <div class="col-lg-10 col-sm-10"> 
                                    <h5>Date</h5>
                                <span>Le <?php the_field( "date" ); ?> <?php the_field( "heure" ); ?></span></div>
                                <hr class="hr-event">
                        </div>
                        <div class="row">
                                <div class="col-lg-2">
                                    <img src="/wp-content/uploads/2022/07/ville.svg">
                                </div>
                                <div class="col-lg-10"> 
                                    <h5>Ville</h5>
                                <span><?php the_field( "ville" ); ?> </span></div>
                                <hr class="hr-event">
                        </div>
                        <div class="row">
                                <div class="col-lg-2">
                                    <img src="/wp-content/uploads/2022/07/lieu.svg">
                                </div>
                                <div class="col-lg-10"> 
                                    <h5>Lieu</h5>
                                <span><?php the_field( "lieu" ); ?></span></div>
                                <hr class="hr-event">
                        </div>
                        <div class="row">
                                <div class="col-lg-2">
                                    <img src="/wp-content/uploads/2022/07/telephone.svg">
                                </div>
                                <div class="col-lg-10"> 
                                    <h5>Téléphone</h5>
                                <span><?php the_field( "telephone" ); ?></span></div>
                                <hr class="hr-event">
                        </div>
                        <div class="row">
                                <div class="col-lg-2">
                                    <img src="/wp-content/uploads/2022/07/email.svg">
                                </div>
                                <div class="col-lg-10"> 
                                    <h5>Email</h5>
                                <span><?php the_field( "email" ); ?></span></div>
                                <hr class="hr-event">
                        </div>
                            
                        </div>
                </div>
                </section>
        </div>
    <?php } ?>
    </div>
    </div>
<?php } ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>