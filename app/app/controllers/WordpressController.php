<?php

class WordpressController extends \BaseController {

	/**
	 * @return Response
	 */
	public function load($path = '')
	{
		// Load Wordpress
		require_once(Config::get('app.wp_path').'/wp-load.php');
		wp();
		Return 'You have asked for wordpress/'.$path;
	}

}