<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'iloveppe_blog');

/** MySQL database username */
define('DB_USER', 'iloveppe_blog');

/** MySQL database password */
define('DB_PASSWORD', 'tq225SueLhFpd28W');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/eUg#F&-uem:FVamLcH}-~)b4EE(jX`]NQ<)CZc*MMnY~h=E?1VH^Z1:PiYFAd3d');
define('SECURE_AUTH_KEY',  'h<]W-NA^*D<zFly[S%Za/FC><K1@3/VpiiGf$N1-qb`+#YCC+7dFs!$65exUlOs|');
define('LOGGED_IN_KEY',    'B$op<,(a+n+bFPV`$zODZ^X7FK@`*R@zq~ChAC)XUbj^tKhGAv;%Zr+``]>V:HAs');
define('NONCE_KEY',        'sRgu-NtR-?V[G,M4B=G7X4M0sYq(Q;]jr*0(d$;-Qt}[.OF/_dHU3y)m86/N1MgA');
define('AUTH_SALT',        'G+ B+[Sc-I^azr9g$!qaR|-:<J8=>|UOZ${d|BsrCr]%]gl[[-Aa5^!sPcn=EY+}');
define('SECURE_AUTH_SALT', 'EsPCY}f|8KYv+dz V|TU:AyTq#./-noegNeLmeE~>mpPVBZ6##f:g4DHTdD_-#x&');
define('LOGGED_IN_SALT',   'LnkB^-ufbx)G^m}+e pmf!e&5J4)3y,6SJv}|M@L=exR/ouK?x:uq^o,E%ed-3e4');
define('NONCE_SALT',       'T8HIw/JC*.;;5mN)E(||_%uI+5hA6IQkyz.#H%n-{$z%lKK0A/A]9&C#d|G,?7X|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ilp_wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en_US');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

define('WP_HOME','http://blog.iloveppe.dev');
define('WP_SITEURL','http://blog.iloveppe.dev');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');