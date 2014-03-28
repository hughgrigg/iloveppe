<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>

  <?php get_template_part('partials/top-nav'); ?>

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
  		
  			
  		
  	