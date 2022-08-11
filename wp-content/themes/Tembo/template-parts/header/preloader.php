<?php
$beorx_preloader = beorx_option('preloader', false);
if ($beorx_preloader ==  'yes') :	?>

	<!-- Preloader start -->
	<div class="theme-loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>

<?php endif; ?>