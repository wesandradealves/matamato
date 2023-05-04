import "../css/sass/style.scss";

$(document).ready(function($){

	if ($(this).scrollTop() > 40) {  
		$('header#header').addClass("sticky");
	}
	else {
		$('header#header').removeClass("sticky");
	}

	$(window).scroll(function() {	
		
		if ($(this).scrollTop() > 40) {  
			$('header#header').addClass("sticky");
			$('#menu-mobile').addClass("sticky");
		}
		else {
			$('header#header').removeClass("sticky");
			$('#menu-mobile').removeClass("sticky");
		}
	});

	// Fecha menu ao pressionar tecla esc
	$(document).keyup(function(e) {
		if (e.keyCode == 27) { // esc keycode

			// remove class do menu-mobile
			$('.header-menu-mobile-btn .hamburger').removeClass('is-active');
			$('body').css('overflow-y', 'auto');
			$('#menu-mobile').addClass('transition-out');
			setTimeout(function () {
				$('#menu-mobile').removeClass('active');
				$('#menu-mobile').removeClass('transition-out');
			}, 250);
		}
	});

	$('.header-menu-mobile-btn .hamburger').click(function(e) {
		e.preventDefault();

		if($('.header-menu-mobile-btn .hamburger').hasClass('is-active')) {
			$('.header-menu-mobile-btn .hamburger').removeClass('is-active');
		} else {
			$('.header-menu-mobile-btn .hamburger').addClass('is-active');
		}

		if ($('#menu-mobile').hasClass('active')) {
			$('#menu-mobile').addClass('transition-out');
			$('body').css('overflow-y', 'hidden');

			setTimeout(function () {
				$('#menu-mobile').removeClass('active');
				$('#menu-mobile').removeClass('transition-out');
				$('#menu-mobile').removeClass('shadow');
				$('body').css('overflow-y', 'auto');
			}, 250);
		} else {
			$('#menu-mobile').addClass('active');
			$('body').css('overflow-y', 'hidden');

			setTimeout(function () {
				$('#menu-mobile').addClass('shadow');
			}, 250);
		}
	});

	if($('input[type="tel"]')){
		$('input[type="tel"]').mask('(00) 00000-0000');
	}

	$('#header-search-btn').click(function(e) {
		e.preventDefault();

		if($('.header-search-form').hasClass('active')) {
			$('#header-search-btn').removeClass('active');
			$('.header-search-form').removeClass('transition');

			setTimeout(function() { 
				$('.header-search-form').removeClass('active');
			}, 150);
		} else {
			$('#header-search-btn').addClass('active');
			$('.header-search-form').addClass('active');

			setTimeout(function() { 
				$('.header-search-form').addClass('transition');
			}, 50);
		}
	});
});