<?php
/**
 * VW Fitness functions and definitions
 *
 * @package VW Fitness
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

function vw_fitness_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo esc_url(home_url());
		echo '">';
		bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
				the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

if (!function_exists('vw_fitness_setup')):
function vw_fitness_setup() {

	$GLOBALS['content_width'] = apply_filters('vw_fitness_content_width', 640);

	load_theme_textdomain('vw-fitness', get_template_directory().'/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		));
	add_image_size('vw-fitness-homepage-thumb', 240, 145, true);
	register_nav_menus(array(
			'primary' => __('Primary Menu', 'vw-fitness'),
			'footer'  => __('Footer Menu', 'vw-fitness'),
		));
	add_theme_support('custom-background', array(
			'default-color' => 'f1f1f1',
		));

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support('post-formats', array('image', 'video', 'gallery', 'audio', ));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style(array('css/editor-style.css', vw_fitness_font_url()));

	// Theme Activation Notice
	global $pagenow;

	if (is_admin() && ('themes.php' == $pagenow) && isset($_GET['activated'])) {
		add_action('admin_notices', 'vw_fitness_activation_notice');
	}
}
endif;// vw_fitness_setup
add_action('after_setup_theme', 'vw_fitness_setup');

// Notice after Theme Activation
function vw_fitness_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
	echo '<p>'.esc_html__('Thank you for choosing VW Fitness theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Fitness theme.', 'vw-fitness').'</p>';
	echo '<p><a href="'.esc_url(admin_url('themes.php?page=vw_fitness_guide')).'" class="button button-primary">'.esc_html__('Welcome Page', 'vw-fitness').'</a></p>';
	echo '</div>';
}

function vw_fitness_widgets_init() {
	register_sidebar(array(
			'name'          => __('Blog Sidebar', 'vw-fitness'),
			'description'   => __('Appears on blog page sidebar', 'vw-fitness'),
			'id'            => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => __('Page Sidebar', 'vw-fitness'),
			'description'   => __('Appears on page sidebar', 'vw-fitness'),
			'id'            => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => __('Third Column Sidebar', 'vw-fitness'),
			'description'   => __('Appears on page sidebar', 'vw-fitness'),
			'id'            => 'sidebar-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => __('Footer 1', 'vw-fitness'),
			'description'   => __('Appears on footer', 'vw-fitness'),
			'id'            => 'footer-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => __('Footer 2', 'vw-fitness'),
			'description'   => __('Appears on footer', 'vw-fitness'),
			'id'            => 'footer-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => __('Footer 3', 'vw-fitness'),
			'description'   => __('Appears on footer', 'vw-fitness'),
			'id'            => 'footer-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => __('Footer 4', 'vw-fitness'),
			'description'   => __('Appears on footer', 'vw-fitness'),
			'id'            => 'footer-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));

}
add_action('widgets_init', 'vw_fitness_widgets_init');

function vw_fitness_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family' => urlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

function vw_fitness_scripts() {

	wp_enqueue_style('vw-fitness-font', vw_fitness_font_url(), array());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('vw-fitness-basic-style', get_stylesheet_uri());
	wp_style_add_data('vw-fitness-style', 'rtl', 'replace');
	wp_enqueue_style('effect', get_template_directory_uri().'/css/effect.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/fontawesome-all.css');

	// Paragraph
	$vw_fitness_paragraph_color       = get_theme_mod('vw_fitness_paragraph_color', '');
	$vw_fitness_paragraph_font_family = get_theme_mod('vw_fitness_paragraph_font_family', '');
	$vw_fitness_paragraph_font_size   = get_theme_mod('vw_fitness_paragraph_font_size', '');
	// "a" tag
	$vw_fitness_atag_color       = get_theme_mod('vw_fitness_atag_color', '');
	$vw_fitness_atag_font_family = get_theme_mod('vw_fitness_atag_font_family', '');
	// "li" tag
	$vw_fitness_li_color       = get_theme_mod('vw_fitness_li_color', '');
	$vw_fitness_li_font_family = get_theme_mod('vw_fitness_li_font_family', '');
	// H1
	$vw_fitness_h1_color       = get_theme_mod('vw_fitness_h1_color', '');
	$vw_fitness_h1_font_family = get_theme_mod('vw_fitness_h1_font_family', '');
	$vw_fitness_h1_font_size   = get_theme_mod('vw_fitness_h1_font_size', '');
	// H2
	$vw_fitness_h2_color       = get_theme_mod('vw_fitness_h2_color', '');
	$vw_fitness_h2_font_family = get_theme_mod('vw_fitness_h2_font_family', '');
	$vw_fitness_h2_font_size   = get_theme_mod('vw_fitness_h2_font_size', '');
	// H3
	$vw_fitness_h3_color       = get_theme_mod('vw_fitness_h3_color', '');
	$vw_fitness_h3_font_family = get_theme_mod('vw_fitness_h3_font_family', '');
	$vw_fitness_h3_font_size   = get_theme_mod('vw_fitness_h3_font_size', '');
	// H4
	$vw_fitness_h4_color       = get_theme_mod('vw_fitness_h4_color', '');
	$vw_fitness_h4_font_family = get_theme_mod('vw_fitness_h4_font_family', '');
	$vw_fitness_h4_font_size   = get_theme_mod('vw_fitness_h4_font_size', '');
	// H5
	$vw_fitness_h5_color       = get_theme_mod('vw_fitness_h5_color', '');
	$vw_fitness_h5_font_family = get_theme_mod('vw_fitness_h5_font_family', '');
	$vw_fitness_h5_font_size   = get_theme_mod('vw_fitness_h5_font_size', '');
	// H6
	$vw_fitness_h6_color       = get_theme_mod('vw_fitness_h6_color', '');
	$vw_fitness_h6_font_family = get_theme_mod('vw_fitness_h6_font_family', '');
	$vw_fitness_h6_font_size   = get_theme_mod('vw_fitness_h6_font_size', '');

	$custom_css = '
			p,span{
			    color:'.esc_html($vw_fitness_paragraph_color).'!important;
			    font-family: '.esc_html($vw_fitness_paragraph_font_family).';
			    font-size: '.esc_html($vw_fitness_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($vw_fitness_atag_color).'!important;
			    font-family: '.esc_html($vw_fitness_atag_font_family).';
			}
			li{
			    color:'.esc_html($vw_fitness_li_color).'!important;
			    font-family: '.esc_html($vw_fitness_li_font_family).';
			}
			h1{
			    color:'.esc_html($vw_fitness_h1_color).'!important;
			    font-family: '.esc_html($vw_fitness_h1_font_family).'!important;
			    font-size: '.esc_html($vw_fitness_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($vw_fitness_h2_color).'!important;
			    font-family: '.esc_html($vw_fitness_h2_font_family).'!important;
			    font-size: '.esc_html($vw_fitness_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($vw_fitness_h3_color).'!important;
			    font-family: '.esc_html($vw_fitness_h3_font_family).'!important;
			    font-size: '.esc_html($vw_fitness_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($vw_fitness_h4_color).'!important;
			    font-family: '.esc_html($vw_fitness_h4_font_family).'!important;
			    font-size: '.esc_html($vw_fitness_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($vw_fitness_h5_color).'!important;
			    font-family: '.esc_html($vw_fitness_h5_font_family).'!important;
			    font-size: '.esc_html($vw_fitness_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($vw_fitness_h6_color).'!important;
			    font-family: '.esc_html($vw_fitness_h6_font_family).'!important;
			    font-size: '.esc_html($vw_fitness_h6_font_size).'!important;
			}

			';
	wp_add_inline_style('vw-fitness-basic-style', $custom_css);

	wp_enqueue_style('nivo-style', get_template_directory_uri().'/css/nivo-slider.css');
	wp_enqueue_script('nivo-slider-jquery', get_template_directory_uri().'/js/jquery.nivo.slider.js', array('jquery'));
	wp_enqueue_script('tether', get_template_directory_uri().'/js/tether.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap-jquery', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '', true);
	wp_enqueue_script('vw-fitness-custom-jquery', get_template_directory_uri().'/js/custom.js', array('jquery'));
	wp_enqueue_script('bootstrap-jquery', get_template_directory_uri().'/js/bootstrap.js', array('jquery'));
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vw_fitness_scripts');

function vw_fitness_ie_stylesheet() {
	wp_enqueue_style('vw-fitness-ie', get_template_directory_uri().'/css/ie.css', array('vw-fitness-basic-style'));
	wp_style_add_data('vw-fitness-ie', 'conditional', 'IE');
}
add_action('wp_enqueue_scripts', 'vw_fitness_ie_stylesheet');

define('VW_FITNESS_SUPPORT', 'https://wordpress.org/support/theme/vw-fitness/', 'vw-fitness');
define('VW_FITNESS_FREE_THEME_DOC', 'https://vwthemes.com/docs/free-vw-fitness/', 'vw-fitness');
define('VW_FITNESS_REVIEW', 'https://www.vwthemes.com/topic/reviews-and-testimonials/', 'vw-fitness');
define('VW_FITNESS_BUY_NOW', 'https://www.vwthemes.com/premium/gym-fitness-wordpress-theme/', 'vw-fitness');
define('VW_FITNESS_LIVE_DEMO', 'https://www.vwthemes.com/vw-fitness-theme/', 'vw-fitness');
define('VW_FITNESS_PRO_DOC', 'https://www.vwthemes.com/docs/vw-fitness-pro/', 'vw-fitness');
define('VW_FITNESS_FAQ', 'https://www.vwthemes.com/faqs/', 'vw-fitness');
define('VW_FITNESS_CHILD_THEME', 'https://developer.wordpress.org/themes/advanced-topics/child-themes/', 'vw-fitness');
define('VW_FITNESS_CONTACT', 'https://www.vwthemes.com/contact/', 'vw-fitness');
define('VW_FITNESS_DEMO_DATA', 'https://vwthemes.net/docs/vw-fitness-demo.xml.zip', 'vw-fitness');

define('vw_fitness_CREDIT', 'https://www.vwthemes.com', 'vw-fitness');

if (!function_exists('vw_fitness_credit')) {
	function vw_fitness_credit() {
		echo "<a href=".esc_url(vw_fitness_CREDIT)." target='_blank'>".esc_html__('VWThemes', 'vw-fitness')."</a>";
	}
}

/*radio button sanitization*/
function vw_fitness_sanitize_choices($input, $setting) {
	global $wp_customize;
	$control = $wp_customize->get_control($setting->id);
	if (array_key_exists($input, $control->choices)) {
		return $input;
	} else {
		return $setting->default;
	}
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory().'/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory().'/inc/custom-header.php';
/**
 * Customizer additions.
 */
require get_template_directory().'/inc/customizer.php';

/* Implement the About theme page */
require get_template_directory().'/inc/getting-started/getting-started.php';