<?php
namespace Dev\Front;

if (!defined('WPINC')) {
    die;
}

/**
 * AjaxFront
 */
class AjaxFront
{
	
	function __construct()
	{
		add_action('wp_ajax_method', array( $this, 'method' ));
    add_action('wp_ajax_nopriv_method', array( $this, 'method' ));
	}

	public function method()
	{
		self::verifyNonce($_POST['nonce']);
		echo json_encode($return);
    wp_die();
	}
}