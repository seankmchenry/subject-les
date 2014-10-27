/**
 * helper.js
 *
 * Sets up home page scripts
 */

jQuery(document).ready(function($){
	/* Top Section */
	var x = $( window ).height();
	var $height = x + 'px';
	$(".top-section").css("height", $height);
	$(".section").css("min-height", $height);
	// apply height on desktop only
	if ($(window).width() > 767) {
		$(".press-section").css("height", $height);
	}

	/* Smooth Scrolling */
	// hat-tip: http://goo.gl/rUOedd
	$("#site-navigation li a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(this.hash).offset().top
		}, 300, function(){
			window.location.hash = hash;
		});
	});

	/* Glide */
	$('#gallery-slider').glide({
		autoplay: 7000,
		hoverpause: true,
		keyboard: true,
		navigation: false,
	});
	$('#press-slider').glide({
		arrows: false,
		autoplay: 7000,
		hoverpause: true,
		keyboard: false,
		navigation: false,
	});
});
