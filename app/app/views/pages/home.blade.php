@extends('layouts.shopfront')

@section('containerClass')
	home-container
@stop

@section('content')
	
<div class="small-12 columns">

	<h1 class="hero dark-bg">{{ trans('home.hero') }}</h1>

	<div class="row">
		<div class="large-6 columns hero-box left dark-bg">
			<div class="row">
				<div class="medium-3 columns text-center">
					{{ AssetHelper::image('i-heart-ppe-white.png') }}
				</div>
				<div class="medium-9 columns">
					<p>
						{{ trans('home.intro') }}
					</p>
				</div>
			</div>
			<ul>
				<li>{{ trans('home.offer-1') }}</li>
				<li>{{ trans('home.offer-2') }}</li>
				<li>{{ trans('home.offer-3') }}</li>
			</ul>
		</div>
	</div>
</div>

@stop