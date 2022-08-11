<?php
$enable_scroll = beorx_option('scroll-up-arrow', false);
?>
<?php if ($enable_scroll == 'yes') : ?>

	<!-- Scroll Top Start -->
	<div class="scroll-top"><i class="<?php echo esc_attr(beorx_option('scroll-up-icon')); ?>"></i>
	</div>
	<!-- Scroll Top End -->
<?php endif; ?>