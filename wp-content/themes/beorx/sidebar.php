<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beorx
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="right-sidebar widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
