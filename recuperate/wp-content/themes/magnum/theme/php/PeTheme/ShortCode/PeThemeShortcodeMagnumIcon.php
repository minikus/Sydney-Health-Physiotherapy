<?php

class PeThemeShortcodeMagnumIcon extends PeThemeShortcode {

	public function __construct($master) {
		parent::__construct($master);
		$this->trigger = "picon";
		$this->group = __("UI",'Pixelentity Theme/Plugin');
		$this->name = __("Icon",'Pixelentity Theme/Plugin');
		$this->description = __("Add an icon",'Pixelentity Theme/Plugin');
		$this->fields = array(
			"icon" => array(
				"label"       => __("Select icon",'Pixelentity Theme/Plugin'),
				"type"        => "Select",
				"options"     => pe_theme_font_awesome_icons(),
				"description" => __('Select icon that you want to insert.','Pixelentity Theme/Plugin'),
				"default"     => "adjust",
			),
			"size" => array(
				"label"       => __("Select icon size",'Pixelentity Theme/Plugin'),
				"type"        => "Select",
				"options"     => array(
					__("Small",'Pixelentity Theme/Plugin') => 'small',
					__("Huge",'Pixelentity Theme/Plugin')  => 'huge',
				),
				"description" => __('Small icons are used in regular text, while big icons are centered and have hover effect.','Pixelentity Theme/Plugin'),
				"default"     => "small",
			),
			"color" => array(
				"label"       => __("Select color",'Pixelentity Theme/Plugin'),
				"type"        => "Select",
				"options"     => array(
					__("Colored",'Pixelentity Theme/Plugin') => 'text-color',
					__("Light",'Pixelentity Theme/Plugin')  => 'text-light',
				),
				"description" => __( 'Choose between two predefined color modes. Only works on small icons.' ,'Pixelentity Theme/Plugin'),
				"default"     => "text-color",
			),
		);
	}

	public function output( $atts, $content = null, $code = "" ) {
		
		extract( $atts );

		$size = isset( $size ) && 'small' === $size ? '' : 'icon huge';
		$color = '' === $size ? $color : '';

		$classes = "$icon $size $color";

		$html = <<< EOT
<i class="$classes"></i>
EOT;
        return trim($html);
	}


}