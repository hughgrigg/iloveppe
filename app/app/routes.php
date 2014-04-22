<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(
	[
		'prefix' => Localisr::setLocale(),
		'before' => [
			'LaravelLocalizationRedirectFilter',
			'LaravelLocalizationRoutes'
		]
	],
	function() {
		// Knowledge base to WordPress
		Route::any('knowledge-base/{path?}', 'WordpressController@load')->where('path', '.+');
		// Controller routes
		Route::controller('contact', 'ContactController');
		Route::controller('/', 'HomeController');
	}
);