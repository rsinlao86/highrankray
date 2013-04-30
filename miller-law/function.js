$(document).ready(function() {
	$("html").css("overflow-x", "hidden");
	$('.home-slide-wrapper').cycle({
	    fx: 'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	    speed: 2000,
	    timeout: 3000,
	    pause: 1,
	    prev: '.home-slide-scroll-left',  
	    next: '.home-slide-scroll-right'
    });
});