<?php

// This is the website top-nav that is common across the Wordpress and Laravel apps
// Grunt copies this file into the Wordpress app
// Grunt then converts Laravel's trans() into Wordpress' __()
// Grunt also copies this file as-is for Laravel with the extension .blade.php
// Only edit this file in build/php
// Not very elegant but it keeps things DRY

?>

<div class="top-nav-back">
	<nav class="row">
		<div class="medium-11 columns padless">
			<ul class="medium-block-grid-4 small-block-grid-2 top-nav">
				<li class="top-nav-item">
					<a class="top-nav-link" href="//www.iloveppe.com/">
						<?php echo trans('Home', 'ilppe') ?><br />
						<span class="icon-home"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<a class="top-nav-link" href="//www.iloveppe.com/about-us">
						<?php echo trans('About Us', 'ilppe') ?><br />
						<span class="icon-user"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<a class="top-nav-link" href="//www.iloveppe.com/contact-us">
						<?php echo trans('Contact Us', 'ilppe') ?><br />
						<span class="icon-bubbles"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<a class="top-nav-link" href="//blog.iloveppe.com/">
						<?php echo trans('Blog', 'ilppe') ?><br />
						<span class="icon-file"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="medium-1 columns padless">
			<ul class="lang-select">
				<li class="lang-select-item">
					<a href="<?php ilppe_lang_link('zh'); ?>" title="看中文版" class="lang-link <?php ilppe_is_current_lang('zh') ?>">
						汉
					</a>
				</li>
				<li class="lang-select-item">
					<a href="<?php ilppe_lang_link('en'); ?>" title="View in English" class="lang-link <?php ilppe_is_current_lang('en') ?>">
						En
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>