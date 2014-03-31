<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return View::make('pages.home');
	}

	public function getAboutUs()
	{
		return View::make('pages.about-us');
	}

	public function getContactUs()
	{
		return View::make('pages.contact-us');
	}

	public function getBlog()
	{
		return View::make('pages.blog');	
	}

}