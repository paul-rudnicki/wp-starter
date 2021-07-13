<?php
namespace Dev\Admin;

if (!defined('WPINC')) {
    die;
}

use Dev\Classes\Variable;

/**
 * Admin
 */
class Admin
{
	public static $const;
	
	function __construct()
	{
		self::setConst();
    add_action('admin_enqueue_scripts', array($this, 'loadAssets'));
	}

	public function loadAssets()
	{
		wp_enqueue_script('starter-dev-js-admin', self::$const->getThemeUrl() . '/dist/js/admin/admin.js', array('jquery'), self::$const->getVersion(), true);
		wp_localize_script('starter-dev-js-admin', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('ajax-nonce')));

    // new AjaxAdmin();
	}

	public function setConst()
	{
		self::$const = new Variable();
	}
}