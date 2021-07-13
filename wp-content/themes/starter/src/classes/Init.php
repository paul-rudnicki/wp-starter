<?php
namespace Dev\Classes;

if (!defined('WPINC')) {
    die;
}

use Dev\Admin\Admin;
use Dev\Front\Front;

/**
 * Init
 */
class Init
{
	
	function __construct()
	{
		add_action('init', array($this, 'Front'));
		if(is_admin()){
      add_action('init', array($this, 'Admin'));
		}
	}

	public function Front()
	{
		new Front();
	}

	public function Admin()
	{
		new Admin();
	}
}