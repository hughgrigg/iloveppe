<?php

function ilppe_lang_support()
{
    return array(
        'en' => 'en_GB',
        'zh' => 'zh_CN'
    );
}

function ilppe_lang_parameter($vars)
{   
    $vars[] = 'hl';
    return $vars;
}
add_filter('query_vars', 'ilppe_lang_parameter');

function ilppe_session()
{
    session_start();
}
add_filter('init', 'ilppe_session');

/**
* Return given lang code from URL, or null if not valid
*/
function ilppe_get_url_lang() {
    $requestLang = filter_input(INPUT_GET, 'hl', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $supportedLangs = ilppe_lang_support();
    if (array_key_exists($requestLang, $supportedLangs)) {
        return $requestLang;
    }
    return null;
}

function ilppe_use_url_locale() {
    $requestLang = ilppe_get_url_lang();
    $supportedLangs = ilppe_lang_support();
    if ($requestLang) {
        $useLang = $requestLang;
        $useLocale = $supportedLangs[$requestLang];
    } else {
        // Default to first locale in list
        $useLocale = reset($supportedLangs);
        $useLang = current(array_keys($supportedLangs));
    }
    return $useLocale;
}
add_action('locale', 'ilppe_use_url_locale');

/**
 * Redirect to locale in session if set and not in URL
 * Otherwise set session locale
 * @return void
 */
function ilppe_session_locale()
{
    $langs = ilppe_lang_support();
    $requestLang = ilppe_get_url_lang();
    if ($requestLang) {
        $_SESSION['lang'] = $requestLang;
        return;
    } elseif (isset($_SESSION['lang']) && array_key_exists($_SESSION['lang'], $langs)) {
        // No valid lang requested in URL
        // But a valid one was given in session
        // Redirect to page with lang parameter in URL
        ilppe_lang_redirect($_SESSION['lang']);
        return;
    } else {
        // Appears to be fresh user
        // Try to go to best language for them
        $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if (array_key_exists($browserLang, $langs)) {
            ilppe_lang_redirect($browserLang);
        }
    }
}
add_action('wp_head', 'ilppe_session_locale');

function ilppe_current_url()
{
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    $pageURL = (substr($pageURL, -1) === '/') ? $pageURL : $pageURL . "/";
    return $pageURL;
}

function ilppe_lang_redirect($lang) {
    wp_redirect(add_query_arg('hl', $lang), 302);
    exit;
}

function ilppe_lang_link($link = null, $lang = null) {
    if (!$link) { $link = $_SERVER[REQUEST_URI]; }
    if (!$lang) { $link = $_SESSION['lang']; }
    echo add_query_arg('hl', $lang, $link);
}

function ilppe_is_current_lang($lang)
{
    if ($_SESSION['lang'] === $lang) {
        echo 'current';
    }
}