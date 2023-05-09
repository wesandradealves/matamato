import "../css/sass/style.scss";
import GLightbox from 'glightbox';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

$(document).ready(function($){
	const lightbox = GLightbox({
		touchNavigation: true,
		loop: true,
		autoplayVideos: true
	});
	$('.owl-carousel').owlCarousel({
		mouseDrag: true,
		touchDrag: true,
		navSpeed: 400,
		autoplayTimeout: 10000,
		smartSpeed: 400,
		dots: true,
		items: 1,
		autoplay: false,
		loop: false,
		autoplayHoverPause: true,
		hidden: false,
		stagePadding: 10,
		margin:0
	});
	$( "body" ).on( "click", ".nav-link", function(e) {
		e.preventDefault();
		if(e.target.href.indexOf('#')) {
			let id = e.target.href.split('#')[1];
			const element = document.getElementById(id);
			element.scrollIntoView({
				behavior: 'smooth'
			});			
		}
	});	
	$("header .container").after($(".navigation").clone().addClass("--mobile"));
    $("header").before($("header").clone().addClass("sticky"));
    $(window).on("scroll", function () {
        $(".sticky").toggleClass("stuck", ($(window).scrollTop() > 49));
		$(".is-active").removeClass('is-active')
    });	
	$( "body" ).on( "click", ".hamburger", function(e) {
		$(this).closest('header').find('.navigation.--mobile').toggleClass('is-active');
		$('.hamburger').toggleClass('is-active');
	});	
});