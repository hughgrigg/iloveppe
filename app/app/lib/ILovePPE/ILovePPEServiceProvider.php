<?php

namespace ILovePPE;
use Illuminate\Support\ServiceProvider;

class ILovePPEServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('AssetHelper', function()
		{
			return new Helpers\AssetHelper(App());
		});

		$this->app->bind('MarkupHelper', function()
		{
			return new Helpers\MarkupHelper;
		});
	}
}