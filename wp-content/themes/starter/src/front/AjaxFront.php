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
		add_action('wp_ajax_ajax_method', array( $this, 'ajax_method' ));
    	add_action('wp_ajax_nopriv_ajax_method', array( $this, 'ajax_method' ));
	}

	public function ajax_method()
	{
		self::verifyNonce($_POST['nonce']);
		$return = array(
			'name' => $_POST['name']
		);
		echo json_encode($return);
    	wp_die();
	}

	public function verifyNonce($nonce){
        if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
            die ( 'Busted!');
    }
}