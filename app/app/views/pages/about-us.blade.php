@extends('layouts.shopfront')

@section('title')
	{{ trans('about-us.title') }}
@stop

@section('content')
	<h1>{{ trans('about-us.title') }}</h1>
	<p>{{ trans('about-us.intro') }}</p>
	<ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1">
		{{ Markup::featureItem('search', 'about-us.identify-research') }}
		{{ Markup::featureItem('stats', 'about-us.market-knowledge') }}
		{{ Markup::featureItem('lab', 'about-us.testing') }}
		{{ Markup::featureItem('thumbs-up', 'about-us.quality-assurance') }}
		{{ Markup::featureItem('flag', 'about-us.expo-representation') }}
		{{ Markup::featureItem('checkmark-circle', 'about-us.product-certification') }}
	</ul>
	<p>{{ trans('about-us.close') }}</p>

@stop