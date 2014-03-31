<?php

namespace ILovePPE\Helpers;
use App;

class MarkupHelper
{
	public function isLang($lang)
	{
		if (App::getLocale() === $lang) {
			return 'current';
		}
	}
}