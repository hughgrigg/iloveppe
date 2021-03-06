<?php

namespace ILovePPE\Helpers;
use Config;

class AssetHelper
{
	protected $staticDomain;

	public function __construct() {
		// This needs to be changed allow Config dependency injection
		$this->staticDomain = Config::get('app.static_url');
	}

	/**
	 * Returns <link> tag for stylesheet
	 * @param  string $filename path to stylesheet relative to static domain css folder
	 * @return void
	 */
	public function stylesheet($filename)
	{
		$linkTag = '<link rel="stylesheet" type="text/css" href="';
		$linkTag .= $this->staticDomain .'/css/'.$filename;
		$linkTag .= '">';
		return $linkTag;
	}

	/**
	 * Returns <script> tag for JS
	 * @param  string  $filename  path to JS file relative to static domain js folder
	 * @param  boolean $async whether the script should load async
	 * @return void
	 */
	public function script($filename, $async = true)
	{
		$scriptTag = '<script ';
		if ($async) {
			$scriptTag .= 'async';
		}
		$scriptTag .= ' src="';
		$scriptTag .= $this->staticDomain.'/js/'.$filename;
		$scriptTag .= '"></script>';
		return $scriptTag;
	}

	public function image($filename, $attributes = [])
	{
		$imgTag = '<img src="';
		$imgTag .= $this->staticDomain.'/img/'.$filename;
		$imgTag .= '" ';
		foreach ($attributes as $attribute => $value) {
			$imgTag .= $attribute.'="'.$value.'" ';
		}
		$imgTag .= '/>';
		return $imgTag;
	}
}