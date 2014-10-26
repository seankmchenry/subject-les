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

	/* Glide */
	$('#gallery-slider').glide({
		autoplay: 7000,
		hoverpause: true,
		keyboard: true,
		navigation: false,
	});
	$('#press-slider').glide({
		arrows: true,
		autoplay: 7000,
		hoverpause: true,
		keyboard: false,
		navigation: false,
	});
});
