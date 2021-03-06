<?php

class ContactController extends BaseController
{

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function postMessage()
	{
		$input = Input::only('email', 'message', 'recaptcha_response_field');
		$rules = array(
			'email' => 'required|email',
			'message' => 'required|min:10|max:10000',
			'recaptcha_response_field' => 'required|recaptcha'
		);
		$validator = Validator::make($input, $rules);
		if ($validator->passes()) {
			$emailContent = [
				'content' => Input::get('message'),
				'emailAddress' => Input::get('email')
			];
			if (Mail::send('emails.contact-form-message', $emailContent, function($message)
			{
    			$message->from(Input::get('email'), 'I Love PPE Contact Form');
    			$message->to('hugh@senlinx.com', 'Hugh Grigg')->subject('Contact form message from '.Input::get('email'));
			}))
			{
				return Redirect::action('HomeController@getContactUs')->with('success', 'messages.success.message-sent');
			}
		}
		return Redirect::action('HomeController@getContactUs')->withInput()->withErrors($validator);
	}
}