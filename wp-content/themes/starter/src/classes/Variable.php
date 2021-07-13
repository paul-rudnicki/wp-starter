<?php
namespace Dev\Classes;

if (!defined('WPINC')) {
  die;
}

/**
 * Variable
 */
class Variable
{
	private static $name = 'dev-starter';
  private static $version = '1.0';
  private static $themeUrl;
  private static $themeDir;

  public function __construct()
  {
  	self::$themeUrl = get_template_directory_uri();
  	self::$themeDir = get_template_directory();
  }
	
	public function getName()
	{
		return self::$name;
	}

	public function getVersion()
	{
		return self::$version;
	}

	public function getThemeUrl()
	{
		return self::$themeUrl;
	}

	public function getThemeDir()
	{
		return self::$themeDir;
	}
}