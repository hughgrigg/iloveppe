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

	public function featureItem($iconName, $featureTextString, $link = null, $small = false)
	{

		$item = '<li class="feature-item">';
		if ($link) {
			$item .= '<a href="'.$link.'" ';
		}
		else {
			$item .= '<div ';
		}
		$item .= ' class="feature-item-block">
		<span class="icon-'.$iconName.' feature-icon ';
		if ($small) {
			$item .= 'small';
		}
		$item .= '">';
		$item .= '</span><span class="feature-item-text">';
		$item .= $this->strongFirstSentence(trans($featureTextString));
		$item .= '</span>';
		if ($link) {
			$item .= '</a>';
		}
		else {
			$item .= '</div>';
		}
		$item .= '</li>';
		return $item;
	}

	public function strongFirstSentence($text)
	{
		$textSplit = explode('.', $text, 2);
		if (count($textSplit) > 1) {
			return '<strong>'.$textSplit[0].'.</strong> '.$textSplit[1];
		}
		return $text;
	}
}