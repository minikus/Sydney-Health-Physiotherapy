<?php

class PeThemeShortcodeMagnumButton extends PeThemeShortcode {

	public function __construct($master) {
		parent::__construct($master);
		$this->trigger = "pbutton";
		$this->group = __("UI",'Pixelentity Theme/Plugin');
		$this->name = __("Button",'Pixelentity Theme/Plugin');
		$this->description = __("Add a button",'Pixelentity Theme/Plugin');
		$this->fields = array(
			"url" => array(
				"label"       => __("Url",'Pixelentity Theme/Plugin'),
				"type"        => "Text",
				"description" => __("Enter the destination url of the button",'Pixelentity Theme/Plugin'),
			),
			"text" => array(
				"label"       => __("Text",'Pixelentity Theme/Plugin'),
				"type"        => "Text",
				"description" => __("Enter the button text here",'Pixelentity Theme/Plugin'),
			),
			"new_window" => array(
				"label"       => __("Open in new window",'Pixelentity Theme/Plugin'),
				"type"        => "Select",
				"description" => __("Should the url be opened in new window or not.",'Pixelentity Theme/Plugin'),
				"options"     => array(
					__("Yes",'Pixelentity Theme/Plugin') => "yes",
					__("No",'Pixelentity Theme/Plugin')  => "no",
				),
				"default"     =>"no",
			),
			"icon" => array(
				"label"       => __("Icon",'Pixelentity Theme/Plugin'),
				"type"        => "Select",
				"options"     => pe_theme_font_awesome_icons(),
				"description" => __('Select optional icon displayed inside button.','Pixelentity Theme/Plugin'),
				"default"     => '',
			),
			"color" => array(
				"label"       => __("Color",'Pixelentity Theme/Plugin'),
				"type"        => "RadioUI",
				"options"     => array(
					__( 'Light' ,'Pixelentity Theme/Plugin') => 'white',
					__( 'Dark' ,'Pixelentity Theme/Plugin')  => ''
				),
				"description" => __('Select button color scheme.','Pixelentity Theme/Plugin'),
				"default"     => "",
			),
		);
	}

	public function output($atts,$content=null,$code="") {
		extract($atts);
		if ( ! isset( $url ) ) $url = "#";

		$target = isset( $new_window ) && 'yes' === $new_window ? '_blank' : '_self';

		$color = isset( $color ) && '' !== $color ? 'white' : '';
		$icon = isset( $icon ) && '' !== $icon ? ' <i class="' . $icon . '"></i>' : '';

		$html = <<< EOT
<a href="$url" class="button outline smoothscroll $color" target="$target">$text$icon</a>
EOT;
        return trim($html);
	}


}
