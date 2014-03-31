<?php

// This is the website top-nav that is common across the Wordpress and Laravel apps
// Grunt copies and converts this file into the two apps
// TThe #trans:{laravel},{wordpress}# tags are converted into Laravel's trans() into Wordpress' __()
// Only edit this file in build/php
// Not very elegant but it keeps things DRY!

?>

<div class="top-nav-back hide-for-small">
	<nav class="row">
		<div class="medium-12 columns padless">
			<ul class="medium-block-grid-5 small-block-grid-2 top-nav">
				<li class="top-nav-item">
					<a class="top-nav-link" href="//www.iloveppe.dev/" title="I ❤ PPE: China PPE Industry Experts">
							<img src="//static.iloveppe.dev/img/i-heart-ppe-white-bg-128.png" alt="I ❤ PPE" class="site-logo" />
						#trans:pages.home,Home#<br />
						<span class="icon-home"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<a class="top-nav-link" href="//www.iloveppe.dev/about-us">
						#trans:pages.aboutus,About Us#<br />
						<span class="icon-user"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<a class="top-nav-link" href="<?php ilppe_lang_link('/contact-us', null) ?>">
						#trans:pages.contactus,Contact Us#<br />
						<span class="icon-bubbles"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<a class="top-nav-link" href="<?php ilppe_lang_link('//blog.iloveppe.dev/', null) ?>">
						#trans:pages.blog,Blog#<br />
						<span class="icon-file"></span>
					</a>
				</li>
				<li class="top-nav-item">
					<ul class="lang-select">
						<li class="lang-select-item">
							<a href="<?php ilppe_lang_link(null, 'zh') ?>" title="看中文版" class="lang-link <?php ilppe_is_current_lang('zh') ?>"  hreflang="zh">
								汉
							</a>
						</li>
						<li class="lang-select-item">
							<a href="<?php ilppe_lang_link(null, 'en') ?>" title="View in English" class="lang-link <?php ilppe_is_current_lang('en') ?>"  hreflang="en">
								En
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</div>