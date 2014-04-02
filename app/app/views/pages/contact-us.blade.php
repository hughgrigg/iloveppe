@extends('layouts.shopfront')

@section('title')
	{{ trans('contact-us.title') }}
@stop

@section('content')

	@if ($errors)
		@foreach($errors->all() as $message)
			<div class="message error">{{ $message }}</div>
		@endforeach
	@endif

	@if (Session::has('success'))
		<div class="message success">{{ trans(Session::get('success')) }}</div>
	@endif

	<h1>{{ trans('contact-us.title') }}</h1>
	<p>{{ trans('contact-us.intro') }}</p>

	{{ Form::open(['action' => 'ContactController@postMessage', 'class' => 'small-form']) }}

		{{ Form::label('email', trans('contact-us.email')) }}
		{{ Form::email('email', $value = null, [
			'placeholder' => trans('contact-us.example-email'),
			'required' => 'required'
		]) }}

		{{ Form::label('message', trans('contact-us.message')) }}
		{{ Form::textarea('message', $value = null, [
			'placeholder' => trans('contact-us.example-message'),
			'required' => 'required'
		]) }}

		{{ Form::label('recaptcha_response_field', trans('contact-us.captcha')) }}
		<div class="recaptcha">
			{{ Form::captcha([
				'theme' => 'clean',
				'lang' => App::getLocale()
			]) }}
		</div>

		{{ Form::button(trans('contact-us.send') . ' <span class="icon-arrow-right"></span>', [
			'type' => 'submit'
		]) }}

	{{ Form::close() }}

@stop