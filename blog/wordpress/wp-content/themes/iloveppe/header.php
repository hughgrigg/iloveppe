<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="top-nav-back">
  	<nav class="row">
      <div class="medium-11 columns padless">
    		<ul class="medium-block-grid-4 small-block-grid-2 top-nav">
        		<li class="top-nav-item">
        			<a class="top-nav-link" href="/">
        				<?php _e('Home', 'ilppe') ?><br />
        				<span class="icon-home"></span>
        			</a>
        		</li>
        		<li class="top-nav-item">
        			<a class="top-nav-link" href="/">
        				<?php _e('About Us', 'ilppe') ?><br />
        				<span class="icon-user"></span>
        			</a>
        		</li>
        		<li class="top-nav-item">
        			<a class="top-nav-link" href="/">
        				<?php _e('Contact Us', 'ilppe') ?><br />
        				<span class="icon-bubbles"></span>
        			</a>
        		</li>
        		<li class="top-nav-item">
        			<a class="top-nav-link" href="/">
        				<?php _e('Blog', 'ilppe') ?><br />
        				<span class="icon-file"></span>
        			</a>
        		</li>
        	</ul>
        </div>
        <div class="medium-1 columns padless">
          <ul class="lang-select">
            <li class="lang-select-item">
              <a href="<?php ilppe_lang_link('zh'); ?>" title="看中文版" class="lang-link <?php ilppe_is_current_lang('zh'); ?>">
                汉
              </a>
            </li>
            <li class="lang-select-item">
              <a href="<?php ilppe_lang_link('en'); ?>" title="View in English" class="lang-link <?php ilppe_is_current_lang('en'); ?>">
                En
              </a>
            </li>
          </ul>
        </div>
  	</nav>
  </div>

  <div class="header-back">
    <div class="row header-row" role="header">
      <div class="medium-4 columns logo-columns">
        <a href="/" title="<?php _e('I Love PPE', 'ilppe') ?>" class="site-link">
          <img src="<?php echo STATIC_URI ?>img/i-heart-ppe-inline.png" alt="<?php _e('I Love PPE', 'ilppe') ?>" />
        </a>
      </div>
      <div class="medium-8 columns">

        <h3 class="site-description">
          <?php _e('China PPE Industry Specialists', 'ilppe'); ?><br />
        </h3>
      </div>
    </div>
  </div>
    
  <div class="row container">

  	<div class="row main-row" role="main">
  		
  			
  		
  	