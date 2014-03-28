<?php

define('TEMPLATE_DIR_URI', get_template_directory_uri());
define("THEME_DIR_PATH", get_template_directory());

include(THEME_DIR_PATH . '/widgets.php');
include(THEME_DIR_PATH . '/includes/locale_url.php');

add_action('after_setup_theme', 'ilppe_load_textdomain');
function ilppe_load_textdomain() {
    load_theme_textdomain('ilppe', THEME_DIR_PATH . '/languages');
}

function staticAssetsURI()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = explode('.', $_SERVER['SERVER_NAME']);
    $tld = end($host);
    $domain = prev($host);
    return $protocol . 'static.' . $domain . '.' . $tld . '/';
}
define("STATIC_URI", staticAssetsURI());

/**
 * Register and enqueue CSS files
 * @return void
 */
function ilppe_load_stylesheets() {
    
    wp_register_style('ilppe', STATIC_URI . 'css/iloveppe.css');
    wp_enqueue_style('ilppe');
    
}
add_action('wp_enqueue_scripts', 'ilppe_load_stylesheets');

/**
 * Register and enqeue JS fles
 * @return void
 */
function ilppe_load_javascript() {
    
    wp_register_script('modernizr', STATIC_URI . 'js/vendor/modernizr.js');
    wp_enqueue_script('modernizr');

    // ilppe-wp.js
    wp_register_script('ilppe-wp', STATIC_URI . 'js/iloveppe_blog.min.js', array(), '1', true);
    wp_enqueue_script('ilppe-wp');

}

add_action('wp_enqueue_scripts', 'ilppe_load_javascript');

// Remove generator meta tag
remove_action('wp_head', 'wp_generator');

// Enable thumbnails
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(300, 200, true);
    add_image_size('300x200', 300, 200, true);
    add_image_size('facebook_feed', 1200, 627, true);
}

// Add editor stylesheet
add_editor_style();

// Easy 404
function ilppe_show_404()
{
    status_header(404);
    // include( get_404_template() );
    die();
}

// Pagination links
function ilppe_pagination_links()
{
    global $wp_query; // Bleurgh

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '/page/%#%',
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'show_all' => False,
        'end_size' => 1,
        'mid_size' => 2,
        'prev_next' => True,
        'prev_text' => '«',
        'next_text' => '»',
        'type' => 'list',
        'add_args' => False,
        'add_fragment' => ''
    ));

}

// Check if this archive has multiple pages
function more_pages() {
    if (get_next_posts_link() || get_previous_posts_link()) {
        return true;
    } else {
        return false;
    }
}