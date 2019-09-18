(function($){
	'use strict';

	$(function(){

		$( '.social-footer.transparent a i' ).addClass( 'big white' ).removeClass( 'light' );

		if ( $( '.peThemeContactForm' ).length > 0 ) {

			$( '.peThemeContactForm' ).peThemeContactForm();

		}

		$( '.row-fluid.post-pagination' ).addClass( 'row' );
		$( '.post-pagination .span12' ).addClass( 'twelve columns' );

		$( '.post-pagination' ).before( '<div class="clearfix"></div>' );

		var $menu_wrap = $( '.menu-wrap' );

		$menu_wrap.find( '> a.smoothscroll img' ).addClass( 'menu-logo' );
		$menu_wrap.children( 'ul' ).addClass( 'menu' );


		$( window ).load( function() {

			// Preloader
			$( '#status' ).fadeOut(); // will first fade out the loading animation
			$( '#preloader' ).delay( 350 ).fadeOut( 'slow' ); // will fade out the white DIV that covers the website.
			$( 'body' ).delay( 350 ).css({ 'overflow-y':'visible' });

		});

		// back to top button
		$( '.back-to-top' ).each( function() {

			var $this = $( this ),
				target = $( 'body > section' ).first();

			if ( ! target.length ) retun;

			$this.attr( 'href', '#' + target.attr( 'id' ) );

		});

		$('.popup-gallery').each( function() {

			var $this = $( this );

			$this.magnificPopup({ 
				type: 'image',
				delegate: 'a',
				gallery:{
					enabled:true
				},
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

		});

		$( '.popup-gallery' ).each( function() {

			var $this = $( this );

			$this.magnificPopup({ 
				type: 'image',
				delegate: 'a',
				gallery:{
					enabled:true
				},
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

		});

		$( '.dolightbox.single-gallery' ).each( function() {

			var $this = $( this );

			$this.magnificPopup({ 
				type: 'image',
				delegate: 'a',
				gallery:{
					enabled:true
				},
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

		});

		$('.equal').children('.columns').equalizeHeight();

		$( window ).resize( function() {
			$( '.equal' ).children( '.columns' ).equalizeHeight();

			setTimeout( function() {

				$( '.equal' ).children( '.columns' ).equalizeHeight();

			}, 100 );

			setTimeout( function() {

				$( '.equal' ).children( '.columns' ).equalizeHeight();

			}, 400 );

			setTimeout( function() {

				$( '.equal' ).children( '.columns' ).equalizeHeight();

			}, 1400 );

			setTimeout( function() {

				$( '.equal' ).children( '.columns' ).equalizeHeight();

			}, 2400 );

		});

		setTimeout( function() {

				$( window ).trigger( 'resize scroll' );

		}, 1000 );

		setTimeout( function() {

				$( window ).trigger( 'resize scroll' );

		}, 3000 );

		$( window ).load( function() {
			$( '.equal' ).children( '.columns' ).equalizeHeight();

			$( window ).trigger( 'resize scroll' );

			setTimeout( function() {

				$( '.equal' ).children( '.columns' ).equalizeHeight();

			}, 1000 );

			setTimeout( function() {

				$( '.equal' ).children( '.columns' ).equalizeHeight();

			}, 1300 );
		})

		$( '.sub-menu' ).addClass( 'dropdown-menu' );

	});

})(jQuery);