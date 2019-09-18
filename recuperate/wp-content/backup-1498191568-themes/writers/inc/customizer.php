<?php
/**
 * writers Theme Customizer
 *
 * Please browse readme.txt for credits and forking information
 *
 * @package writers
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function writers_customize_register( $wp_customize ) {

	//get the current color value for accent color
	$color_scheme = writers_get_color_scheme();
	//get the default color for current color scheme
	$current_color_scheme = writers_current_color_scheme_default_color();

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_section('header_image')->title = __( 'Front Page Header', 'writers' );
	$wp_customize->get_section('colors')->title = __( 'Background Color', 'writers' );


//HELPDESK SECTION
	$wp_customize->add_section(
		'writers_contact',
		array(
			'title' => __('Helpdesk', 'writers'),
			'priority' => 1,
		'description' => __( '<p><strong>Helpdesk & Support</strong><br> If you need help with anything theme related, or have pre-sale questions please contact us <a href="http://madeforwriters.com/help-support/" target="_blank">through this form</a> or email us at <strong>Help@madeforwriters.com</strong></p>
		<br><hr><br>
		<a style="display:block;" href="http://madeforwriters.com/writers/" target="_blank"><img src="http://madeforwriters.com/images/theme-img.png"></a>
			', 'writers' ),
			)
		);  
	$wp_customize->add_setting('writers_contact[info]', array(
		'sanitize_callback' => 'writers_no_sanitize',
		'type' => 'info_control',
		'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_section', array(
		'section' => 'writers_contact',
		'settings' => 'writers_contact[info]',
		'type' => 'textarea',
		'priority' => 1
		) )
	);   



//UNLOCK SECTION
	$wp_customize->add_section(
		'writers_unlock',
		array(
			'title' => __('Unlock More Features', 'writers'),
			'priority' => 9999999,
		'description' => __( '<a style="display:block;" href="http://madeforwriters.com/writers/" target="_blank"><img src="http://madeforwriters.com/images/theme-img.png"></a>
			', 'writers' ),
			)
		);  
	$wp_customize->add_setting('writers_unlock[info]', array(
		'sanitize_callback' => 'writers_no_sanitize',
		'type' => 'info_control',
		'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'unlock_section', array(
		'section' => 'writers_unlock',
		'settings' => 'writers_unlock[info]',
		'type' => 'textarea',
		'priority' => 1
		) )
	);   



	//Header Background Color setting
	$wp_customize->add_setting( 'header_bg_color', array(
		'default'           => '#1b1b1b',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array(
		'label'       => __( 'Header Background Color', 'writers' ),
		'description' => __( 'Applied to header background.', 'writers' ),
		'section'     => 'header_image',
		'settings'    => 'header_bg_color',
		) ) );
	$wp_customize->add_section( 'site_identity' , array(
		'priority'   => 3,
		));
	$wp_customize->add_section( 'header_image' , array(
		'title'      => __('Front Page: Header', 'writers'),
		'priority'   => 4,
		));
	$wp_customize->add_setting( 'header_image_text_color', array(
		'default'           => '#1c1c1c',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_text_color', array(
		'label'       => __( 'Header Image Headline Color', 'writers' ),
		'description' => __( 'Choose a color for the header image headline.', 'writers' ),
		'priority' 			=> 2,
		'section'     => 'header_image',
		'settings'    => 'header_image_text_color',
		) ) );
	$wp_customize->add_setting( 'header_image_tagline_color', array(
		'default'           => '#7b7b7b',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_tagline_color', array(
		'label'       => __( 'Header Image Tagline Color', 'writers' ),
		'description' => __( 'Choose a color for the header tagline headline.', 'writers' ),
		'section'     => 'header_image',
		'priority'   => 2,
		'settings'    => 'header_image_tagline_color',
		) ) );
	$wp_customize->add_setting( 'hero_image_title', array(
		'type'              => 'theme_mod',
		'sanitize_callback' => 'wp_kses_post',
		'capability'        => 'edit_theme_options',
		'default'  => __( '', 'writers' ),
		) );
	$wp_customize->add_control( 'hero_image_title', array(
		'label'    => __( "Header Image Title", 'writers' ),
		'section'  => 'header_image',
		'description' => __( 'Add a title to your header image! If you dont want any, you can press SPACE inside, leaving it blank.', 'writers' ),
		'type'     => 'text',
		'priority' => 1,
		) );
	$wp_customize->add_setting( 'hero_image_subtitle', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'wp_kses_post',
		'default'  => __( '', 'writers' ),
		) );

	$wp_customize->add_control( 'hero_image_subtitle', array(
		'label'    => __( "Header Image Tagline", 'writers' ),
		'section'  => 'header_image',
		'description' => __( 'Add a tagline to your header image! If you dont want any, you can press SPACE inside, leaving it blank.', 'writers' ),
		'type'     => 'text',
		'priority' => 1,
		) );
	$wp_customize->add_setting( 'blog_post_author_image', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url',
		) );
	$wp_customize->add_control( 'blog_post_author_image', array(
		'label'    => __( "Author Image URL", 'writers' ),
		'description' => __( 'Displayed above headline on blog posts. Paste in the link to your author image, 50x50 size is recommended.', 'writers' ),
		'section'  => 'post_page_options',
		'type'     => 'url',
		'priority' => 1,
		) );
	$wp_customize->add_setting( 'background_elements_color', array(
		'default'           => '#eeeeee',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_elements_color', array(
		'label'       => __( 'Background Elements Color', 'writers' ),
		'description' => __( 'Choose the color of background elements.', 'writers' ),
		'section'     => 'accent_color_option',
		'settings'    => 'background_elements_color',
		'priority' => 1,
		) ) );

// Blog feed start
	$wp_customize->add_section(
		'blog_feed_customization',
		array(
			'title'     => __('Blog Feed','writers'),
			'priority'  => 1,
			)
		);

		$wp_customize->add_setting( 'toggle_fallback_img', array(
        'default' => 0,
        'priority' => 1,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
   	
	$wp_customize->add_control( 'toggle_fallback_img', array(
	    'label'    => __( 'Hide Blog Feed Quote Image', 'writers' ),
	    'section'  => 'blog_feed_customization',
	    'settings' => 'toggle_fallback_img',
	    'priority' => 1,
	    'type'     => 'checkbox',
) );
// Blog feed end



	$wp_customize->add_section(
		'accent_color_option',
		array(
			'title'     => __('Global Theme Colors','writers'),
			'priority'  => 2
			)
		);

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'color_scheme', array(
		'default'           => 'default',
		'sanitize_callback' => 'writers_sanitize_color_scheme',
		'transport'         => 'postMessage',
		) );

	$wp_customize->add_control( 'color_scheme', array(
		'label'    => __( 'Theme Color Name', 'writers' ),
		'section'  => 'foots',
		'type'     => 'select',
		'choices'  => writers_get_color_scheme_choices(),
		'priority' => 3,
		) );

	// Add custom accent color.

	$wp_customize->add_setting( 'accent_color', array(
		'default'           => $current_color_scheme[0],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
		'label'       => __( 'Theme Color', 'writers' ),
		'description' => __( 'Applied to highlight elements.', 'writers' ),
		'section'     => 'accent_color_option',
		'settings'    => 'accent_color',
		) ) );

	//Add section for post option
	$wp_customize->add_section(
		'post_options',
		array(
			'title'     => __('Post Options','writers'),
			'priority'  => 300
			)
		);

	$wp_customize->add_setting('post_display_option', array(
		'default'        => 'post-excerpt',
		'sanitize_callback' => 'writers_sanitize_post_display_option',
		'transport'         => 'refresh'
		));

	$wp_customize->add_control('post_display_types', array(
		'label'      => __('How would you like to dipaly a post on post listing page?', 'writers'),
		'section'    => 'post_options',
		'settings'   => 'post_display_option',
		'type'       => 'radio',
		'choices'    => array(
			'post-excerpt' => __('Post excerpt','writers'),
			'full-post' => __('Full post','writers'),            
			),
		));
	
}
add_action( 'customize_register', 'writers_customize_register' );

/**
 * Register color schemes for writers.
 *
 * @return array An associative array of color scheme options.
 */
function writers_get_color_schemes() {
	return apply_filters( 'writers_color_schemes', array(
		'default' => array(
			'label'  => __( 'Default', 'writers' ),
			'colors' => array(
				'#4dbf99',			
				),
			),
		'pink'    => array(
			'label'  => __( 'Pink', 'writers' ),
			'colors' => array(
				'#FF4081',				
				),
			),
		'orange'  => array(
			'label'  => __( 'Orange', 'writers' ),
			'colors' => array(
				'#FF5722',
				),
			),
		'green'    => array(
			'label'  => __( 'Green', 'writers' ),
			'colors' => array(
				'#8BC34A',
				),
			),
		'red'    => array(
			'label'  => __( 'Red', 'writers' ),
			'colors' => array(
				'#FF5252',
				),
			),
		'yellow'    => array(
			'label'  => __( 'yellow', 'writers' ),
			'colors' => array(
				'#FFC107',
				),
			),
		'blue'   => array(
			'label'  => __( 'Blue', 'writers' ),
			'colors' => array(
				'#03A9F4',
				),
			),
		) );
}

if(!function_exists('writers_current_color_scheme_default_color')):
/**
 * Get the default hex color value for current color scheme
 *
 *
 * @return array An associative array of current color scheme hex values.
 */
function writers_current_color_scheme_default_color(){
	$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
	
	$color_schemes       = writers_get_color_schemes();

	if ( array_key_exists( $color_scheme_option, $color_schemes ) ) {
		return $color_schemes[ $color_scheme_option ]['colors'];
	}

	return $color_schemes['default']['colors'];
}
endif; //writers_current_color_scheme_default_color

if ( ! function_exists( 'writers_get_color_scheme' ) ) :
/**
 * Get the current writers color scheme.
 *
 *
 * @return array An associative array of currently set color hex values.
 */
function writers_get_color_scheme() {
	$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
	$accent_color = get_theme_mod('accent_color','#4dbf99');
	$color_schemes       = writers_get_color_schemes();

	if ( array_key_exists( $color_scheme_option, $color_schemes ) ) {
		$color_schemes[ $color_scheme_option ]['colors'] = array($accent_color);
		return $color_schemes[ $color_scheme_option ]['colors'];
	}

	return $color_schemes['default']['colors'];
}
endif; // writers_get_color_scheme

if ( ! function_exists( 'writers_get_color_scheme_choices' ) ) :
/**
 * Returns an array of color scheme choices registered for writers.
 *
 *
 * @return array Array of color schemes.
 */
function writers_get_color_scheme_choices() {
	$color_schemes                = writers_get_color_schemes();
	$color_scheme_control_options = array();

	foreach ( $color_schemes as $color_scheme => $value ) {
		$color_scheme_control_options[ $color_scheme ] = $value['label'];
	}

	return $color_scheme_control_options;
}
endif; // writers_get_color_scheme_choices

if ( ! function_exists( 'writers_sanitize_color_scheme' ) ) :
/**
 * Sanitization callback for color schemes.
 *
 *
 * @param string $value Color scheme name value.
 * @return string Color scheme name.
 */
function writers_sanitize_color_scheme( $value ) {
	$color_schemes = writers_get_color_scheme_choices();

	if ( ! array_key_exists( $value, $color_schemes ) ) {
		$value = 'default';
	}

	return $value;
}
endif; // writers_sanitize_color_scheme

if ( ! function_exists( 'writers_sanitize_post_display_option' ) ) :
/**
 * Sanitization callback for post display option.
 *
 *
 * @param string $value post display style.
 * @return string post display style.
 */

function writers_sanitize_post_display_option( $value ) {
	if ( ! in_array( $value, array( 'post-excerpt', 'full-post' ) ) )
		$value = 'post-excerpt';

	return $value;
}
endif; // writers_sanitize_post_display_option
/**
 * Enqueues front-end CSS for color scheme.
 *
 *
 * @see wp_add_inline_style()
 */
function writers_color_scheme_css() {
	$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
	
	$color_scheme = writers_get_color_scheme();

	$color = array(
		'accent_color'            => $color_scheme[0],
		);

	$color_scheme_css = writers_get_color_scheme_css( $color);

	wp_add_inline_style( 'writers-style', $color_scheme_css );
}
add_action( 'wp_enqueue_scripts', 'writers_color_scheme_css' );

/**
 * Returns CSS for the color schemes.
 *
 * @param array $colors Color scheme colors.
 * @return string Color scheme CSS.
 */
function writers_get_color_scheme_css( $colors ) {
	$colors = wp_parse_args( $colors, array(
		'accent_color'            => '',
		) );

	$css = <<<CSS
	/* Color Scheme */

	/* Accent Color */

	a:active,
	a:hover,
	a:focus {
		color: {$colors['accent_color']};
	}

	.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
		color: {$colors['accent_color']};
	}

	.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
		background-color: {$colors['accent_color']};
		background: {$colors['accent_color']};
		border-color:{$colors['accent_color']};
	}

	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
		color: {$colors['accent_color']} !important;			
	}

	.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {	    
		background-color: {$colors['accent_color']} !important;
		color:#fff !important;
	}
	.btn, .btn-default:visited, .btn-default:active:hover, .btn-default.active:hover, .btn-default:active:focus, .btn-default.active:focus, .btn-default:active.focus, .btn-default.active.focus {
		background: {$colors['accent_color']};
	}

	.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
		color: {$colors['accent_color']};
	}
	.cat-links a, .tags-links a {
		color: {$colors['accent_color']};
	}
	.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
	.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
		color: #fff;
		background-color: {$colors['accent_color']};
	}
	h5.entry-date a:hover {
		color: {$colors['accent_color']};
	}

	 #respond input#submit {
	background-color: {$colors['accent_color']};
	background: {$colors['accent_color']};
}


button:hover, button, button:active, button:focus {
	border: 1px solid {$colors['accent_color']};
	background-color:{$colors['accent_color']};
	background:{$colors['accent_color']};
}
.dropdown-menu .current-menu-item.current_page_item a, .dropdown-menu .current-menu-item.current_page_item a:hover, .dropdown-menu .current-menu-item.current_page_item a:active, .dropdown-menu .current-menu-item.current_page_item a:focus {
	background: {$colors['accent_color']} !important;
	color:#fff !important
}
@media (max-width: 767px) {
	.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
		background-color: {$colors['accent_color']};
		color: #fff;
	}
}
blockquote {
	border-left: 5px solid {$colors['accent_color']};
}
.sticky-post{
	background: {$colors['accent_color']};
	color:white;
}

.entry-title a:hover,
.entry-title a:focus{
	color: {$colors['accent_color']};
}

.entry-header .entry-meta::after{
	background: {$colors['accent_color']};
}

.readmore-btn, .readmore-btn:visited, .readmore-btn:active, .readmore-btn:hover, .readmore-btn:focus {
	background: {$colors['accent_color']};
}

.post-password-form input[type="submit"], .post-password-form input[type="submit"]:hover, .post-password-form input[type="submit"]:focus, .post-password-form input[type="submit"]:active {
	background-color: {$colors['accent_color']};

}

.fa {
	color: {$colors['accent_color']};
}

.btn-default{
	border-bottom: 1px solid {$colors['accent_color']};
}

.btn-default:hover, .btn-default:focus{
	border-bottom: 1px solid {$colors['accent_color']};
	background-color: {$colors['accent_color']};
}

.nav-previous:hover, .nav-next:hover{
	border: 1px solid {$colors['accent_color']};
	background-color: {$colors['accent_color']};
}

.next-post a:hover,.prev-post a:hover{
	color: {$colors['accent_color']};
}

.posts-navigation .next-post a:hover .fa, .posts-navigation .prev-post a:hover .fa{
	color: {$colors['accent_color']};
}




	#secondary .widget a:hover,
	#secondary .widget a:focus{
color: {$colors['accent_color']};
}

	#secondary .widget_calendar tbody a {
background-color: {$colors['accent_color']};
color: #fff;
padding: 0.2em;
}

	#secondary .widget_calendar tbody a:hover{
background-color: {$colors['accent_color']};
color: #fff;
padding: 0.2em;
}	

CSS;

return $css;
}

if(! function_exists('writers_header_bg_color_css' ) ):
/**
* Set the header background color 
*/
function writers_header_bg_color_css(){

	?>

	<style type="text/css">
	.site-header { background: <?php echo esc_attr(get_theme_mod( 'header_bg_color')); ?>; }
	.footer-widgets h3 { color: <?php echo esc_attr(get_theme_mod( 'footer_widget_title_colors')); ?>; }
	.site-footer { background: <?php echo esc_attr(get_theme_mod( 'footer_copyright_background_color')); ?>; }
	.footer-widget-wrapper { background: <?php echo esc_attr(get_theme_mod( 'footer_colors')); ?>; }
	.row.site-info { color: <?php echo esc_attr(get_theme_mod( 'footer_copyright_text_color')); ?>; }
	#secondary h3.widget-title, #secondary h4.widget-title { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_colors')); ?>; }
	#secondary .widget li, #secondary .textwidget, #secondary .tagcloud { background: <?php echo esc_attr(get_theme_mod( 'sidebar_background_color')); ?>; }
	#secondary .widget a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
	.navbar-default,.navbar-default li>.dropdown-menu, .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dr { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
	.navbar-default .navbar-nav>li>a, .navbar-default li>.dropdown-menu>li>a { color: <?php echo esc_attr(get_theme_mod( 'navigation_text_color')); ?>; }
	.navbar-default .navbar-brand, .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus { color: <?php echo esc_attr(get_theme_mod( 'navigation_logo_color')); ?>; }
	h1.entry-title, .entry-header .entry-title a { color: <?php echo esc_attr(get_theme_mod( 'headline_color')); ?>; }
	.entry-content, .entry-summary, .post-feed-wrapper p { color: <?php echo esc_attr(get_theme_mod( 'post_content_color')); ?>; }
	h5.entry-date, h5.entry-date a { color: <?php echo esc_attr(get_theme_mod( 'author_line_color')); ?>; }
	.top-widgets { background: <?php echo esc_attr(get_theme_mod( 'top_widget_background_color')); ?>; }
	.top-widgets h3 { color: <?php echo esc_attr(get_theme_mod( 'top_widget_title_color')); ?>; }
	.top-widgets, .top-widgets p { color: <?php echo esc_attr(get_theme_mod( 'top_widget_text_color')); ?>; }
	.bottom-widgets { background: <?php echo esc_attr(get_theme_mod( 'bottom_widget_background_color')); ?>; }
	.bottom-widgets h3 { color: <?php echo esc_attr(get_theme_mod( 'bottom_widget_title_color')); ?>; }
	.frontpage-site-title { color: <?php echo esc_attr(get_theme_mod( 'header_image_text_color')) ?>; }
	.frontpage-site-description { color: <?php echo esc_attr(get_theme_mod( 'header_image_tagline_color')) ?>; }
	.bottom-widgets, .bottom-widgets p { color: <?php echo esc_attr(get_theme_mod( 'bottom_widget_text_color')); ?>; }
	.footer-widgets, .footer-widgets p { color: <?php echo esc_attr(get_theme_mod( 'footer_widget_text_color')); ?>; }
	.home .lh-nav-bg-transform .navbar-nav>li>a { color: <?php echo esc_attr(get_theme_mod( 'navigation_frontpage_menu_color')); ?>; }
	.home .lh-nav-bg-transform.navbar-default .navbar-brand { color: <?php echo esc_attr(get_theme_mod( 'navigation_frontpage_logo_color')); ?>; }
	body, #secondary h4.widget-title { background-color: <?php echo esc_attr(get_theme_mod( 'background_elements_color')); ?>; }
	@media (max-width:767px){	
	.lh-nav-bg-transform button.navbar-toggle, .navbar-toggle, .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_text_color')); ?>; }
	.home .lh-nav-bg-transform, .navbar-default .navbar-toggle .icon-bar, .navbar-default .navbar-toggle:focus .icon-bar, .navbar-default .navbar-toggle:hover .icon-bar { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?> !important; }
	.navbar-default .navbar-nav .open .dropdown-menu>li>a, .home .lh-nav-bg-transform .navbar-nav>li>a {color: <?php echo esc_attr(get_theme_mod( 'navigation_text_color')); ?>; }
	.home .lh-nav-bg-transform.navbar-default .navbar-brand { color: <?php echo esc_attr(get_theme_mod( 'navigation_logo_color')); ?>; }
	}	
	</style>
	<?php }
	add_action( 'wp_head', 'writers_header_bg_color_css' );
	endif;

/**
 * Binds JS listener to make Customizer color_scheme control.
 *
 * Passes color scheme data as colorScheme global.
 *
 */
function writers_customize_control_js() {
	wp_enqueue_script( 'writers-color-scheme-control', get_template_directory_uri() . '/js/color-scheme-control.js', array( 'customize-controls', 'iris', 'underscore', 'wp-util' ), '20141216', true );
	wp_localize_script( 'writers-color-scheme-control', 'colorScheme', writers_get_color_schemes() );
}
add_action( 'customize_controls_enqueue_scripts', 'writers_customize_control_js' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function writers_customize_preview_js() {
	wp_enqueue_script( 'writers_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'writers_customize_preview_js' );

/**
 * Output an Underscore template for generating CSS for the color scheme.
 *
 * The template generates the css dynamically for instant display in the Customizer
 * preview.
 *
 */
function writers_color_scheme_css_template() {
	$colors = array(
		'accent_color'            => '{{ data.accent_color }}',
		);
		?>
		<script type="text/html" id="tmpl-writers-color-scheme">
		<?php echo writers_get_color_scheme_css( $colors ); ?>
		</script>
		<?php
	}
	add_action( 'customize_controls_print_footer_scripts', 'writers_color_scheme_css_template' );


function writers_customizer_stylesheet() {
	
	wp_enqueue_style( 'writers-customizer-css', get_template_directory_uri().'/css/customizer.css', NULL, NULL, 'all' );
	
}
