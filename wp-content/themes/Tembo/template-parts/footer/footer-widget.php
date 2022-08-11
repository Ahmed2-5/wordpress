<?php
if (is_active_sidebar('footer-1')) :
?>
	<div class="footer-widget footer__area section-padding secondary-bg">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
		</div>
	</div>

<?php endif; ?>