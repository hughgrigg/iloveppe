<?php

function ilppe_lang_support()
{
    return array(
        'en' => 'en_GB',
        'zh' => 'zh_CN'
    );
}

function ilppe_locale_urls()
{
    $langs = ilppe_lang_support();
    foreach ($langs as $lang => $isoCode) {
        add_rewrite_endpoint($lang, EP_PERMALINK | EP_PAGES | EP_ROOT | EP_CATEGORIES);
    }
    session_start();
}
add_action('init', 'ilppe_locale_urls');

/**
* Return given lang code from URL, or null if not valid
*/
function ilppe_get_url_lang() {
    $supportedLangs = ilppe_lang_support();
    $base = basename(filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING));
    if (array_key_exists($base, $supportedLangs)) {
        return $base;
    }
    return null;
}

function ilppe_use_url_locale() {
    $requestLang = ilppe_get_url_lang();
    $supportedLangs = ilppe_lang_support();
    if ($requestLang) {
        return $supportedLangs[$requestLang];
    }
    // Default to first locale in list
    return current(array_keys($supportedLangs));
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
    } elseif (isset($_SESSION['lang'])) {
        // No valid lang requested in URL
        // But it was given in session
        // Redirect to page with lang parameter in URL
        wp_redirect(ilppe_current_url() . $_SESSION['lang'], 301);
        exit;
    } else {
        // Appears to be fresh user
        // Try to go to best language for them
        $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        echo $browserLang;
        if (array_key_exists($browserLang, $langs)) {
            wp_redirect(ilppe_current_url() . $browserLang, 302);
            exit;
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