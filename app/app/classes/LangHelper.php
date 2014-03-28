<?php

// This needs setting up as a facade

class LangHelper
{
	public static function isLang($lang)
	{
		if (App::getLocale() === $lang) {
			return 'current';
		}
	}

	public static function langLink($lang)
	{
		$url = Request::url();
		$query = parse_url($url, PHP_URL_QUERY);
		// Returns a string if the URL has parameters or NULL if not
		if( $query ) {
    		$url .= "&hl=$lang";
		}
		else {
    		$url .= "?hl=$lang";
		}
		return $url;
	}
}