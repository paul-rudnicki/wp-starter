<?php
namespace Dev\Classes;

if (!defined('WPINC')) {
    die;
}

class Car
{
	
	function __construct()
	{
		echo '<pre>';
		var_dump('Witaj swiecie!!!');
		echo '</pre>';
	}
}