<?php
$beorx_layout =  beorx_option('footer-menu');
$beorx_copyright = beorx_option('footer-copyright');

$beorx_htmls = array(
	'a'      => array(
		'href'   => array(),
		'target' => array()
	),
	'strong' => array(),
	'small'  => array(),
	'span'   => array(),
	'p'      => array(),
	'h1'     => array(),
	'h2'     => array(),
	'h3'     => array(),
	'h4'     => array(),
	'h5'     => array(),
	'h6'     => array(),
);

if ($beorx_layout == 'yes' && has_nav_menu('menu-2')) {

	$footer_enable = 'col-lg-6';
} else {
	$footer_enable = 'col-lg-12';
}

?>



<div class="copyright__area secondary-bg">
	<div class="container">
		<div class="row align-items-center lg-t-center">
			<div class="<?php echo esc_attr($footer_enable); ?>">
				<div class="footer__area-copyright-left">
					<p><?php
					echo wp_kses($beorx_copyright, $beorx_htmls);
					?></p>
				</div>
			</div>
			<?php if ($beorx_layout == 'yes' && has_nav_menu('menu-2')) :?>
			<div class="col-lg-6">
				<div class="copyright__area-right t-right lg-t-center">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
						)
					);
					?>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>