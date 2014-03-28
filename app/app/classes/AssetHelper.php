<?php

class AssetHelper 
{

	protected $staticDomain;

	public function __construct() {
		// Set static domain based on environment
		if (App::environment('local')) {
			$this->staticDomain = '//static.iloveppe.dev/';
		} else {
			$this->staticDomain = '//static.iloveppe.com/';
		}
	}

	/**
	 * Echoes <link> tag for stylesheet
	 * @param  string $path path to stylesheet relative to static domain css folder
	 * @return void
	 */
	public static function stylesheet($path)
	{
		$linkTag = '<link rel="stylesheet" type="text/css" href="';
		$linkTag .= '//static.iloveppe.dev/'.'css/'.$path;
		$linkTag .= '">';
		echo $linkTag;
	}

	/**
	 * Echoes <script> tag for JS
	 * @param  string  $path  path to JS file relative to static domain js folder
	 * @param  boolean $async whether the script should load async
	 * @return void
	 */
	public static function script($path, $async = true)
	{
		$scriptTag = '<script ';
		if ($async) {
			$scriptTag .= 'async';
		}
		$scriptTag .= ' src="';
		$scriptTag .= '//static.iloveppe.dev/'.'css/'.$path;
		$scriptTag .= '"></script>';
		echo $scriptTag;
	}
}