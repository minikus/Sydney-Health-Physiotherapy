/*
	01. Smooth scrolling
	02. FitText
	03. Magnific Popup
	04. Sliders
	05. Fading divs
	06. Contactform
	07. Menu toggle
	08. Fixed menu
*/


// 01. Smooth scrolling - Smooth scroll after clicking an element with the class 'smoothscroll'
jQuery(function(){
	jQuery('.smoothscroll, .smoothscroll > a').bind('click.smoothscroll',function (e){
		
        var target = this.hash,
        	$target = jQuery( 'body' ).find( target );

        if ( ! $target.length ) return;

        var offset = $target.offset().top,
        	headerHeight = jQuery( '.main-menu' ).height();

        if ( jQuery( '.admin-bar' ).length ) headerHeight = headerHeight + 32;

        offset = offset - headerHeight + 70;

        e.preventDefault();

        jQuery('html, body').stop().animate({
			'scrollTop': offset-0
        }, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
});


// 02. FitText
jQuery(window).load(function(){
	setTimeout(function(){
		jQuery('h1.fittext').fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
		jQuery('h2.fittext').fitText(1, { minFontSize: '40px', maxFontSize: '80px' });
		jQuery('h3.fittext').fitText(1, { minFontSize: '30px', maxFontSize: '60px' });
		jQuery('h4.fittext').fitText(1, { minFontSize: '20px', maxFontSize: '40px' });
		jQuery('h5.fittext').fitText(1, { minFontSize: '15px', maxFontSize: '30px' });
		jQuery('h6.fittext').fitText(1, { minFontSize: '10px', maxFontSize: '20px' });
	}, 200);
});

jQuery('h1.fittext').fitText(1, { minFontSize: '50px', maxFontSize: '100px' });
jQuery('h2.fittext').fitText(1, { minFontSize: '40px', maxFontSize: '80px' });
jQuery('h3.fittext').fitText(1, { minFontSize: '30px', maxFontSize: '60px' });
jQuery('h4.fittext').fitText(1, { minFontSize: '20px', maxFontSize: '40px' });
jQuery('h5.fittext').fitText(1, { minFontSize: '15px', maxFontSize: '30px' });
jQuery('h6.fittext').fitText(1, { minFontSize: '10px', maxFontSize: '20px' });


// 03. Magnific Popup - Magnific Popup for images
jQuery('.popup, .popup-image').magnificPopup({ 
	type: 'image',
	fixedContentPos: false,
	fixedBgPos: false,
	mainClass: 'mfp-no-margins mfp-with-zoom',
	image: {
		verticalFit: true
	},
	zoom: {
		enabled: true,
		duration: 300
	}
});

// Magnific Popup for soundcloud
jQuery('.popup-soundcloud').magnificPopup({ 
	type: 'iframe',
	mainClass: 'soundcloud-popup'
});

// Magnific Popup for videos and google maps
jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	disableOn: 700,
	type: 'iframe',
	fixedContentPos: false,
	fixedBgPos: false,
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false
});

// Magnific Popup for a normal inline element
jQuery('.popup-inline').magnificPopup({
	type: 'inline'
});

// Magnific Popup for a project with rich content
jQuery('.popup-project').magnificPopup({
	type: 'inline',
	alignTop: true
});

// Magnific Popup for an ajax popup without rich content
jQuery('.popup-ajax').magnificPopup({
	type: 'ajax',
	alignTop: true
});


// 04. Sliders
jQuery(window).load(function() {

	// Featured work slider
	jQuery('.fw-slider').bxSlider({
		auto: false,
		mode: 'fade',
		pager: true,
		controls: true,
		nextText: '',
		prevText: ''
	});

	// Quote slider
	var quoteslider = jQuery('.quote-slider').bxSlider({
		auto: false,
		responsive: true,
		adaptiveHeight: true,
		mode: 'fade',
		pager: false,
		controls: false
	});

	jQuery('.quote-next').click(function(){
		quoteslider.goToNextSlide();
		return false;
	});

	jQuery('.quote-prev').click(function(){
		quoteslider.goToPrevSlide();
		return false;
	});
	
});


// 05. Fading divs - Fade a div except the one that's hovered
if(jQuery('html').hasClass('no-touch')){
	jQuery('.fade-it, .image-thumb, .service-item').hover(function(){
		jQuery(this).siblings().addClass('fade');
	}, function(){
		jQuery(this).siblings().removeClass('fade');
	});
}

// 07. Menu toggle
jQuery(function(){
    jQuery('#toggle').click(function (e){
		e.stopPropagation();
    });
	jQuery('html').click(function (e){
		if (!jQuery('.toggle').is(jQuery(e.target))){
			jQuery('#toggle').prop("checked", false);
		}
	});
});


// 08. Fixed menu - Fix the menu to the top after you scroll past it
jQuery(window).load(function(){
	'use strict';
	jQuery(".fixedmenu").sticky({ topSpacing: 0 });
});