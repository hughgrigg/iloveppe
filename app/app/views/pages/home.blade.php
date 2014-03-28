@extends('layouts.shopfront')

@section('containerClass')
	home-container
@stop

@section('content')

	<div class="small-12 columns padless">

		<section class="home-section home-hero dark-bg">
			<h1 class="hero">{{ trans('home.title') }}</h1>

			<h3 class="hero middle-block">{{ trans('home.intro') }}</h3>

			<div class="row">
				<div class="hero-box text-center">
					@include('partials.mailchimp-form')
				</div>
			</div>
		</section>

		<section class="home-section light-bg">
			<h2>China PPE Sourcing</h2>
		</section>

	</div>

</div>

@stop