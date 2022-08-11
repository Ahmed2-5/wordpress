<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beorx
 */

// footer widget
get_template_part('template-parts/footer/' . 'footer-widget');
// footer bottom
get_template_part('template-parts/footer/' . 'copyright');
// scroll up arrow 
get_template_part('template-parts/footer/' . 'scroll-up');
?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>