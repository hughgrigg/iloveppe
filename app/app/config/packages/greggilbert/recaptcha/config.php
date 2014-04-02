<?php

$ini = parse_ini_file(base_path() . '/config.ini');

return array(

	/*
	|--------------------------------------------------------------------------
	| API Keys
	|--------------------------------------------------------------------------
	|
	| Set the public and private API keys as provided by reCAPTCHA.
	|
	*/
	'public_key'	=> $ini['recaptcha_public'],
	'private_key'	=> $ini['recaptcha_private'],
	
	/*
	|--------------------------------------------------------------------------
	| Template
	|--------------------------------------------------------------------------
	|
	| Set a template to use if you don't want to use the standard one.
	|
	*/
	'template'		=> '',
	
);