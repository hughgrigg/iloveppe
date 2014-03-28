<?php

// This needs setting up as a facade

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
	 * Returns <link> tag for stylesheet
	 * @param  string $filename path to stylesheet relative to static domain css folder
	 * @return void
	 */
	public static function stylesheet($filename)
	{
		$linkTag = '<link rel="stylesheet" type="text/css" href="';
		$linkTag .= '//static.iloveppe.dev/css/'.$filename;
		$linkTag .= '">';
		return $linkTag;
	}

	/**
	 * Returns <script> tag for JS
	 * @param  string  $filename  path to JS file relative to static domain js folder
	 * @param  boolean $async whether the script should load async
	 * @return void
	 */
	public static function script($filename, $async = true)
	{
		$scriptTag = '<script ';
		if ($async) {
			$scriptTag .= 'async';
		}
		$scriptTag .= ' src="';
		$scriptTag .= '//static.iloveppe.dev/js/'.$filename;
		$scriptTag .= '"></script>';
		return $scriptTag;
	}

	public static function image($filename)
	{
		$imgTag = '<img src="';
		$imgTag .= '//static.iloveppe.dev/img/'.$filename;
		$imgTag .= '" />';
		return $imgTag;
	}
}