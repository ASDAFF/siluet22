$(function(){
	$('.mail-slider').flickity({
		cellAlign: "left",
		arrowShape: { 
			x0: 10,
			x1: 55, y1: 45,
			x2: 60, y2: 40,
			x3: 20
		}
	});


	$('.slider').flickity({
		wrapAround: true,
		cellAlign: "left",
		arrowShape: { 
			x0: 10,
			x1: 55, y1: 45,
			x2: 60, y2: 40,
			x3: 20
		}
	});


	$('.news-page-slider_main').flickity({
		pageDots: false
	});


	$('.news-page-slider_nav').flickity({
		asNavFor: ".news-page-slider_main",
		contain: true,
		pageDots: false,
		prevNextButtons: false
	});

	$('.train-portf__slider').flickity({
		// contain: true,
		wrapAround: true,
		pageDots: false,
		freeScroll: true,
	});

	lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true
	});

	$("select").selectmenu();
});