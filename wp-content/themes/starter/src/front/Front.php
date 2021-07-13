<?php
namespace Dev\Front;

if (!defined('WPINC')) {
    die;
}

use Dev\Classes\Variable;
use Dev\Front\AjaxFront;
use Dev\Classes\Theme;

/**
 * Front
 */
class Front
{
	public static $const;

	function __construct()
	{
		self::setConst();
		
    	add_action('wp_enqueue_scripts', array($this, 'loadAssets'));

    	new AjaxFront();

    	add_shortcode('dev-starter-test', array($this, 'initShortcodeTest'));
	}

	public function loadAssets()
	{
		wp_enqueue_script('starter-dev-js-front', self::$const->getThemeUrl() . '/dist/js/front/front.js', array('jquery'), self::$const->getVersion(), true);
		wp_enqueue_style('starter-dev-js-front', self::$const->getThemeUrl() . '/dist/css/main.css', '', self::$const->getVersion());
		wp_localize_script('starter-dev-js-front', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('ajax-nonce')));
	}

	function setConst() {
    	self::$const = new Variable();
	}

    public function initShortcodeTest()
    {
    	$theme = new Theme();
    	$output = '';
    	$data = array(
    		"name" => "Paweł",
    		"surname" => "Rudnicki"
    	);
    	$output = $theme::loadTheme('front/test.php', $data);
        return $output;
    }
}