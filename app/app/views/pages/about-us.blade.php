@extends('layouts.shopfront')

@section('title')
	{{ trans('about-us.title') }}
@stop

@section('content')
	<h1>{{ trans('about-us.title') }}</h1>
	<p>{{ trans('about-us.intro') }}</p>
	<ul>
		{{ trans('about-us.list') }}
	</ul>
	<p>{{ trans('about-us.welcome-contact') }}</p>
@stop