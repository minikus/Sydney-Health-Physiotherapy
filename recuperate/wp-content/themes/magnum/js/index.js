jQuery(document).ready(function(){
	var onMobile = false,
		peThemeSliderMobileOverride = ! jQuery(".fallback-image").length;

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { onMobile = true; }

	var video = jQuery("#video"),
		gallerySimple = jQuery(".splash-gallery-slider-simple"),
		galleryNotSimple = jQuery( '.splash-gallery-slider-notsimple' );

	if ( video.length ) {

		if( ( onMobile === false ) ) {
			// The videoplayer - advanced controlled background video
			jQuery(".fullscreen-video").mb_YTPlayer({
				containment: "body",
				opacity: 1, // Set the opacity of the player;
				// ratio: "4/3" or "16/9" to set the aspect ratio of the movie;
				// quality: "default" or "small", "medium", "large", "hd720", "hd1080", "highres";
				// containment: The CSS selector of the DOM element where you want the video background; if not specified it takes the "body"; if set to "self" the player will be instanced on that element;
				// optimizeDisplay: True will fit the video size into the window size optimizing the view;
				// vol: 1 to 100 (number) set the volume level of the video.
				startAt: 0, // Set the seconds the video should start at.
				showYTLogo: false, // Show or hide the YT logo and the link to the original video URL.
				showControls: false // Show or hide the controls bar at the bottom of the page.
			});

			// First we're going to hide these elements
			jQuery(".video-controls, #show-after, .img-after").hide();

			jQuery(".small-play-btn").hide();

			// Start the movie
			video.on("YTPStart",function(){
				jQuery(".small-play-btn").hide();
				jQuery(".small-pause-btn").show();
			});

			// Pause the movie
			video.on("YTPPause",function(){
				jQuery(".small-play-btn").show();
				jQuery(".small-pause-btn").hide();
			});

			if ( ! jQuery( 'section.is-autoplay' ).length ) {

				// Start the movie
				video.on("YTPStart",function(){
					jQuery(".video-controls").show().css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
				});

				// Pause the movie
				video.on("YTPPause",function(){
					jQuery(".video-controls").css({opacity: 1, visibility: "hidden"}).animate({opacity: 0},300);
				});

				// After the movie
				if ( ! jQuery( '.video-loop' ).length ) {

					video.on("YTPEnd",function(){
						jQuery(".video-controls, #show-before, .img-before").hide();
					});

				}

			} else {

				// Start the movie
				video.on("YTPStart",function(){
					jQuery(".video-controls").show().css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
				});

			}

			if ( jQuery( 'section.playhide' ).length ) {

				// Start the movie
				video.on("YTPStart",function(){
					jQuery("section.playhide").css({opacity: 1, visibility: "hidden"}).animate({opacity: 0},300);
				});

				// Pause the movie
				video.on("YTPPause",function(){
					jQuery("section.playhide").show().css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
				});

				if ( ! jQuery( 'section.is-autoplay' ).length ) {

					// Stop the movie
					video.on("YTPEnd",function(){
						jQuery("section.playhide").show().css({opacity: 0, visibility: "visible"}).animate({opacity: 1},300);
					});

				}

			}

		} else {
			// Fallback for mobile devices
			jQuery("#home").removeClass(".video");
			jQuery("#show-after, .img-after").show();
			jQuery(".fullscreen-video, #show-before, .img-before, .video-controls, .play-btn, .play-btn-normal").hide();

			var $fallback = jQuery( '.fallback-image' );

			if ( $fallback.length ) {

				var $bg_image = $fallback.siblings( '.fullscreen-img' );

				if ( $bg_image ) {

					$bg_image.css( 'background-image', 'url(' + $fallback.attr( 'data-fallback' ) + ')' );

				} else {

					$fallback.after( '<div class="fullscreen-img"></div>' );

					$bg_image = $fallback.siblings( '.fullscreen-img' );
					$bg_image.css( 'background-image', 'url(' + $fallback.attr( 'data-fallback' ) + ')' );

				}

			}

		}

	} else if ( gallerySimple.length && jQuery( '.hiddenslide').length ) {

		if( ( onMobile === false || peThemeSliderMobileOverride ) ) {

			jQuery("body").addClass("nobg");

			jQuery( ".fallback-image" ).hide();

			var hslides = [];

			jQuery( '.hiddenslide').each( function() {

				var $this = jQuery( this );
				hslides.push( $this.attr('data-src') );

			});

			var defaults = {
				containment: "body",
				timer: 4000,
				effTimer: 2000,
				grayScale: false,
				shuffle: false,
				preserveWidth: false,
				images:hslides,
				onStart:function(){},
				onPause:function(){},
				onPlay:function(opt){},
				onChange:function(opt,idx){},
				onNext:function(opt){},
				onPrev:function(opt){}
			};

			if ( jQuery( '.splash-arrows' ).length || jQuery( '.splash-both' ).length ) {

				defaults['autoStart'] = false;
				defaults['effTimer'] = 1000;
				defaults['controls'] = "#home-controls";

			}

			// Fullbody automatic background gallery
			jQuery.mbBgndGallery.buildGallery( defaults );
		} else {
			jQuery("body").removeClass("nobg");
			jQuery(".fallback-image").show();
		}

	} else if ( galleryNotSimple.length ) {

		var defaults = {
			animation: "fade", // Choose between slide or fade
			pagination: true // Choose between true or false
		};

		if ( jQuery( '.splash-no' ).length ) {

			defaults['play'] = 4000;
			defaults['pagination'] = false;

		} else if ( jQuery( '.splash-arrows' ).length ) {

			defaults['pagination'] = false;

		}

		// Fullscreen content and background slider / fader
		jQuery("#slides").superslides( defaults );

	}

});

jQuery(document).on("animating.slides", function(a){
	// Special fix if we want to display FitText headings
	setTimeout(function(){
		jQuery("h1.fittext").fitText(1, { minFontSize: "50px", maxFontSize: "100px" });
		jQuery("h2.fittext").fitText(1, { minFontSize: "40px", maxFontSize: "80px" });
		jQuery("h3.fittext").fitText(1, { minFontSize: "30px", maxFontSize: "60px" });
		jQuery("h4.fittext").fitText(1, { minFontSize: "20px", maxFontSize: "40px" });
		jQuery("h5.fittext").fitText(1, { minFontSize: "15px", maxFontSize: "30px" });
		jQuery("h6.fittext").fitText(1, { minFontSize: "10px", maxFontSize: "20px" });
	}, 100)
});

jQuery(window).load(function() {

	// Featured post slider
	jQuery('.featured-post-slider').bxSlider({
		auto: false,
		mode: 'horizontal',
		pager: false,
		controls: true,
		nextText: '',
		prevText: ''
	});

});


// FitVids
jQuery(".post-media, .vendor").fitVids();