(function ($) {
	"use strict";

	$(".header__area-main-menu .menu li > ul").slice(1, 4).addClass("menu-last");
	// /*========== Responsive Menu  ==========*/
	$('.header__area-main-menu').meanmenu({
		meanMenuContainer: '.responsive-menu',
		meanScreenWidth: '991',
		meanMenuOpen: '<span></span><span></span><span></span>',
		meanMenuClose: '<i class="flaticon-close"></i>'
	});
	// /*==========  wow  ==========*/
	new WOW().init();
	 // /*==========  niceSelect  ==========*/
	 $("select").niceSelect();

	/*==========  counterUp  ==========*/
	var counter = $('.counter');
	counter.counterUp({
		time: 2500,
		delay: 100
	});
	/*==========  Search  =========*/
	$('.header__area-search-icon.open').on('click', function () {
		$('.header__area-search-box').fadeIn().addClass('active');
	});
	$('.header__area-search-box-icon').on('click', function () {
		$(this).fadeIn().removeClass('active');
	});
	$('.header__area-search-box-icon i').on('click', function () {
		$('.header__area-search-box').fadeOut().removeClass('active');
	});
	$('.header__area-search-box form').on('click', function (e) {
		e.stopPropagation();
	});
	/*==========  img-popup  ==========*/
	$('.img-popup').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	/*==========  video-popup  ==========*/
	$('.video-popup').magnificPopup({
		type: 'iframe'
	});
	/*========== scroll to top  ==========*/
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 200) {
			$('.scroll-top').fadeIn(200);
		} else {
			$('.scroll-top').fadeOut(200);
		}
	});
	$('.scroll-top').on('click', function (event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});
	/*==========  theme loader  ==========*/
	$(window).on("load", function () {
		$(".theme-loader").fadeOut(500);
	});
	/*========== FAQ  ==========*/
	$(window).on("scroll", function () {
		$('svg.circle-progress').each(function (index, value) {
			if ($(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) && $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)) {
				var percent = $(this).parent('.beorx-progress').data('counter');
				var radius = $(this).find($('circle.complete')).attr('r');
				var circumference = 2 * Math.PI * radius;
				var strokeDashOffset = circumference - ((percent * circumference) / 100);
				$(this).find($('circle.complete')).animate({
					'stroke-dashoffset': strokeDashOffset
				}, 1250);
			}
		});
	}).trigger('scroll');
	$('.beorx-progress').each(function () {
		$(this).append('<span class="counter">' + $(this).data('counter') + '<small>%</small></span>');
	});
})(jQuery);