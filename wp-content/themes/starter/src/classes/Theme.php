<?php
namespace Dev\Classes;

if (!defined('WPINC')) {
    die;
}

use Dev\Classes\Variable;

/**
 * Theme
 */
class Theme
{
	
	function __construct(){}

	public static function loadTheme($template_name, $data = array())
	{
		$const = new Variable();
		$theme_url = $const->getThemeDir() . '/templates/' . $template_name;
		ob_start();
		include_once($theme_url);
		$content = ob_get_contents();
		ob_get_clean();
		return $content;
	}
}