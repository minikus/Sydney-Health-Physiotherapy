jQuery( window ).load( function() {

	var showWhenImage = jQuery( '#pe_theme_meta_bg__background_, #pe_theme_meta_bg__look__buttonset, #pe_theme_meta_bg__usevideo__buttonset, #pe_theme_meta_bg__autoplay_, #pe_theme_meta_bg__loop_, #pe_theme_meta_bg__mute_, #pe_theme_meta_bg__vid_button_, #pe_theme_meta_bg__playhide_, #pe_theme_meta_bg__video_' ).closest( '.option' ),
		showWhenGallery = jQuery( '#pe_theme_meta_bg__gallery_, #pe_theme_meta_bg__gal_look__buttonset, #pe_theme_meta_bg__controls__buttonset' ).closest( '.option' );

	if ( jQuery( 'label[for="pe_theme_meta_bg__type__0"]' ).hasClass( 'ui-state-active') ) { // image home

		showWhenImage.fadeIn(0);
		showWhenGallery.fadeOut(0);

	} else if ( jQuery( 'label[for="pe_theme_meta_bg__type__1"]' ).hasClass( 'ui-state-active') ) { // gallery homr

		showWhenImage.fadeOut(0);
		showWhenGallery.fadeIn(0);

	}

	jQuery( 'label[for="pe_theme_meta_bg__type__0"], label[for="pe_theme_meta_bg__type__1"]' ).on( 'click', function(e) {

		if ( jQuery( 'label[for="pe_theme_meta_bg__type__0"]' ).hasClass( 'ui-state-active') ) { // image home

			showWhenImage.fadeIn(0);
			showWhenGallery.fadeOut(0);

		} else if ( jQuery( 'label[for="pe_theme_meta_bg__type__1"]' ).hasClass( 'ui-state-active') ) { // gallery homr

			showWhenImage.fadeOut(0);
			showWhenGallery.fadeIn(0);

		}

	});

});