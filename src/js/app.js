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
});