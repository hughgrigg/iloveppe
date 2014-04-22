@extends('layouts.shopfront')

@section('title')
	关于爱劳保品牌
@stop

@section('content')
	<h1>关于爱劳保品牌</h1>
	<p>ILovePPE (爱劳保) 品牌经营者为 <a href="http://www.senlinx.com/">Senlinx Consulting [森霖企业管理咨询(上海)有限公司]</a>。我们是在上海注册的外商独资企业。我们专注PPE (个体防护用品)行业，为劳保安全产品专业买家和可靠卖家搭建可信赖的外贸平台。</p>
	<p>无论您的产品属于</p>
	<ul class="medium-block-grid-6 small-block-grid-2">
		{{ Markup::featureItem('headwear', 'guanyu-women.leixing.toubu', null, true) }}
		{{ Markup::featureItem('eyeware', 'guanyu-women.leixing.yanbu', null, true) }}
		{{ Markup::featureItem('ear-protection', 'guanyu-women.leixing.tingli', null, true) }}
		{{ Markup::featureItem('footwear', 'guanyu-women.leixing.zubu', null, true) }}
		{{ Markup::featureItem('gloves', 'guanyu-women.leixing.shoubu', null, true) }}
		{{ Markup::featureItem('full-body', 'guanyu-women.leixing.pifu', null, true) }}
	</ul>
	<p>还是其它相关产品，免费注册为 I ❤ PPE 会员，我们帮助您的产品全球销售：</p>
	<ul class="medium-block-grid-3 small-block-grid-1">
		{{ Markup::featureItem('cart', 'guanyu-women.huodong.online-shops', null, true) }}
		{{ Markup::featureItem('signup', 'guanyu-women.huodong.standards', null, true) }}
		{{ Markup::featureItem('file', 'guanyu-women.huodong.news', null, true) }}
		{{ Markup::featureItem('calendar', 'guanyu-women.huodong.expos', null, true) }}
		{{ Markup::featureItem('earth', 'guanyu-women.huodong.platform', null, true) }}
		{{ Markup::featureItem('users', 'guanyu-women.huodong.coaching', null, true) }}
	</ul>
	<p>我们的提供采购咨询和厂商的质量评估推介，协助中小企业拓展环球业务，提供多元化的业务推广及营商支持服务，帮助了解国际动态、标准变化。</p>
	<p style="font-size: larger; text-align: center;">
	<a href="{{ Localisr::localizeURL('/contact-us') }}">联系我们</a>
	</p>

@stop