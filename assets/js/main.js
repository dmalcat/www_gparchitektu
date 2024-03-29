$(function() {
	/*
	$('#slider').slick({
		autoplay: true,
		dots: true,
		arrows: false,
		fade: true,
		speed: 500,
		autoplaySpeed: 3000
	});*/

	replaceSVG();
	replaceVideo();

	function replaceVideo() {
		if ($(window).width() < 768) { // pokud je rozlišení menší než 768 pixelů
		   $('#video').remove(); // odebereme element s id="video" z DOMu
		   $('#image').addClass('active'); // přidáme třídu "active" k elementu s id="image"
		}
	}

	function replaceSVG() {
		/*
		  * Replace all SVG images with inline SVG
		  */
		$('img.svg').each(function () {
			var $img = $(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');
	
			$.get(imgURL, function (data) {
				// Get the SVG tag, ignore the rest
				var $svg = $(data).find('svg');
	
				// Add replaced image's ID to the new SVG
				if (typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image's classes to the new SVG
				if (typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass + ' replaced-svg');
				}
	
				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');
	
				// Replace image with new SVG
				$img.replaceWith($svg);
	
			}, 'xml');
	
		});
	}
});