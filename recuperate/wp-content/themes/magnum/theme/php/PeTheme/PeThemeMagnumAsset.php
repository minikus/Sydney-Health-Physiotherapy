<?php

class PeThemeMagnumAsset extends PeThemeAsset  {

	public function __construct(&$master) {
		$this->minifiedJS = "theme/compressed/theme.min.js";
		$this->minifiedCSS = "theme/compressed/theme.min.css";

		//define("PE_THEME_LOCAL_VIDEO_SUPPORT",true);

		parent::__construct($master);
	}

	public function registerAssets() {

		add_filter("pe_theme_js_init_file",array(&$this,"pe_theme_js_init_file_filter"));
		add_filter("pe_theme_js_init_deps",array(&$this,"pe_theme_js_init_deps_filter"));
		add_filter("pe_theme_minified_js_deps",array(&$this,"pe_theme_minified_js_deps_filter"));
		
		parent::registerAssets();

		if ($this->minifyCSS) {
			$deps = 
				array(
					  "pe_theme_compressed"
					  );
		} else {


			// theme styles
			$this->addStyle("css/loader.css",array(),"pe_theme_magnum-loader");
			$this->addStyle("css/lib/essentials.css",array(),"pe_theme_magnum-essentials");
			$this->addStyle("css/lib/ytplayer.css",array(),"pe_theme_magnum-ytplayer");
			$this->addStyle("css/lib/font-awesome.min.css",array(),"pe_theme_magnum-font_awesome");
			$this->addStyle("css/lib/magnific-popup.css",array(),"pe_theme_magnum-magnific_popup");
			$this->addStyle("css/lib/jquery.bxslider.css",array(),"pe_theme_magnum-bxslider");
			$this->addStyle("css/lib/superslides.css",array(),"pe_theme_magnum-superslides");
			$this->addStyle("css/style.css",array(),"pe_theme_magnum-style");
			$this->addStyle("css/custom.css",array(),"pe_theme_magnum-custom");

			$deps = 
				array(
					  "pe_theme_magnum-loader",
					  "pe_theme_magnum-essentials",
					  "pe_theme_magnum-ytplayer",
					  "pe_theme_magnum-font_awesome",
					  "pe_theme_magnum-magnific_popup",
					  "pe_theme_magnum-bxslider",
					  "pe_theme_magnum-superslides",
					  "pe_theme_magnum-style",
					  "pe_theme_flare",
					  "pe_theme_magnum-custom",
					  );
		}

		$this->addStyle("style.css",$deps,"pe_theme_init");

		$this->addScript("theme/js/pe/pixelentity.controller.js",
						 array(
							   //"pe_theme_mobile",
							   "pe_theme_utils_browser",
							   "pe_theme_selectivizr",
							   "pe_theme_lazyload",
							   //"pe_theme_flare",
							  "pe_theme_magnum-modernizr",
							  "pe_theme_magnum-fittext",
							  "pe_theme_magnum-magnific_popup",
							  "pe_theme_magnum-bxslider",
							  "pe_theme_magnum-sticky",
							  "pe_theme_magnum-ytplayer",
							  "pe_theme_magnum-touchswipe",
							  "pe_theme_magnum-caroufredsel",
							  "pe_theme_magnum-ytplayer",
							  "pe_theme_magnum-equal",
							  "pe_theme_magnum-bgndgallery",
							  "pe_theme_magnum-bgndgallery_effects",
							  "pe_theme_magnum-superslides",
							  "pe_theme_magnum-fitvids",
							  "pe_theme_magnum-main",
							  "pe_theme_magnum-index",
							  "pe_theme_widgets_contact",
							  "pe_theme_magnum-services_slider",
							  "pe_theme_magnum-custom"
							   ),"pe_theme_controller");

		$this->addScript("js/lib/modernizr.js",array(),"pe_theme_magnum-modernizr",false);
		$this->addScript("js/lib/jquery.fittext.js",array(),"pe_theme_magnum-fittext");
		$this->addScript("js/lib/jquery.magnific-popup.min.js",array(),"pe_theme_magnum-magnific_popup");
		$this->addScript("js/lib/jquery.bxslider.min.js",array(),"pe_theme_magnum-bxslider");
		$this->addScript("js/lib/jquery.sticky.js",array(),"pe_theme_magnum-sticky");
		$this->addScript("js/lib/jquery.ytplayer.js",array(),"pe_theme_magnum-ytplayer");
		$this->addScript("js/lib/jquery.equal.js",array(),"pe_theme_magnum-equal");
		$this->addScript("js/lib/jquery.touchswipe.min.js",array(),"pe_theme_magnum-touchswipe");
		$this->addScript("js/lib/jquery.caroufredsel.min.js",array(),"pe_theme_magnum-caroufredsel");
		$this->addScript("js/lib/jquery.ytplayer.js",array(),"pe_theme_magnum-ytplayer");
		$this->addScript("js/lib/jquery.bgndgallery.js",array(),"pe_theme_magnum-bgndgallery");
		$this->addScript("js/lib/jquery.bgndgallery.effects.js",array(),"pe_theme_magnum-bgndgallery_effects");
		$this->addScript("js/lib/jquery.superslides.min.js",array(),"pe_theme_magnum-superslides");
		$this->addScript("js/lib/jquery.fitvids.js",array(),"pe_theme_magnum-fitvids");
		$this->addScript("js/main.js",array(),"pe_theme_magnum-main");
		$this->addScript("js/index.js",array(),"pe_theme_magnum-index");
		$this->addScript("js/services-slider.js",array(),"pe_theme_magnum-services_slider");
		$this->addScript("js/custom.js",array(),"pe_theme_magnum-custom");
		
	}

	public function pe_theme_js_init_file_filter($js) {
		return $js;
		//return "js/custom.js";
	}

	public function pe_theme_js_init_deps_filter($deps) {
		return $deps;
		/*
		  return array(
		  "jquery",
		  );
		*/
	}

	public function pe_theme_minified_js_deps_filter($deps) {
		return $deps;
		//return array("jquery");
	}

	public function style() {
		bloginfo("stylesheet_url"); 
	}

	public function enqueueAssets() {
		$this->registerAssets();

		$t =& peTheme();
		
		if ($this->minifyJS && file_exists(PE_THEME_PATH."/preview/init.js")) {
			$this->addScript("preview/init.js",array("jquery"),"pe_theme_preview_init");
			wp_localize_script("pe_theme_preview_init", 'o',
							   array(
									 //"dark" => PE_THEME_URL."/css/dark_skin.css",
									 "css" => $this->master->color->customCSS(true,"color1")
									 ));
			wp_enqueue_script("pe_theme_preview_init");
		}	
		
		wp_enqueue_style("pe_theme_init");
		wp_enqueue_script("pe_theme_init");

		wp_localize_script("pe_theme_init","_magnum",
			array(
				"ajax-loading" => PE_THEME_URL . '/images/ajax-loader.gif',
				"home_url"     => home_url('/'),
			));

		if ($this->minifyJS && file_exists(PE_THEME_PATH."/preview/preview.js")) {
			$this->addScript("preview/preview.js",array("pe_theme_init"),"pe_theme_skin_chooser");
			wp_localize_script("pe_theme_skin_chooser","pe_skin_chooser",array("url"=>urlencode(PE_THEME_URL."/")));
			wp_enqueue_script("pe_theme_skin_chooser");
		}

	}


}

?>