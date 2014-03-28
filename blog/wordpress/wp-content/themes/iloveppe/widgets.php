<?php

// Register sidebar
function ilppe_widgets_init()
{

    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'right-sidebar',
        'description' => 'Sidebar on the right-hand side that shows on large screens up',
        'class' => 'widget',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'));
    
    register_widget('ilppeSubscribeWidget');
    register_widget('ilppeRecentPostsWidget');

}

add_action('widgets_init', 'ilppe_widgets_init');

class ilppeSubscribeWidget extends WP_Widget
{

    function ilppeSubscribeWidget()
    {
        $widget_ops = array('classname' => 'ilppe-subscribe-widget', 'description' => 'MailChimp newsletter signup form');
        $control_ops = array('width' => 300, 'height' => 350, 'id_base' => 'ilppe-subscribe-widget');
        $this->WP_Widget('ilppe-subscribe-widget', 'Subcribe Widget', $widget_ops, $control_ops);
        
        parent::__construct('ilppe-subscribe-widget', 'Subscribe Form');
    }

    function widget($args, $instance)
    {
        extract($args);

        echo $before_widget;

        get_template_part('partials/widgets/subscribe');

    }

}

class ilppeRecentpostsWidget extends WP_Widget
{

    function ilppeRecentPostsWidget()
    {
        $widget_ops = array('classname' => 'ilppe-recent-posts-widget', 'description' => 'List of posts ordered by number of comments');
        $control_ops = array('width' => 300, 'height' => 350, 'id_base' => 'ilppe-recent-posts-widget');
        $this->WP_Widget('ilppe-recent-posts-widget', 'Recent posts Widget', $widget_ops, $control_ops);
        
        parent::__construct('ilppe-recent-posts-widget', 'Recent posts');
    }

    function widget($args, $instance)
    {
        extract($args);

        echo $before_widget;

        get_template_part('widgets/recent-posts');
    }

}
