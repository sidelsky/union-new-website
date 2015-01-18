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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'union-new-website');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f:Nik+Zt^*PK*}rD,.:-NN?a76Nua|;37Z#ROsD*pEGc|(+$^q =2kIR`xqM6{vL');
define('SECURE_AUTH_KEY',  '<pZwc*c(z+@ .-cw2 T}n@-(zA5hYk{uMsj@{B+{L8c*vOUc(WOR[2xoeCV E@ox');
define('LOGGED_IN_KEY',    ']GAYV7:=Z,&Kj=HW2BQCgyfIM{UmT2`%l3a@,iC5H,`I)mvfn=7h_*O>%rRy-^BD');
define('NONCE_KEY',        'es_I;0,9`M5>lBYI{?${jp`Gu;=e)ef@X^=nS?CtN3z:,v1,-/%XfJ_[@!uO-zz`');
define('AUTH_SALT',        'dED-x*M,n2q--tJ8f k*Y!-pS|&EChTRX$M;!3Jh&y=L>M2kiC 1!MjqbA.H7Pb!');
define('SECURE_AUTH_SALT', ' |tMkUft;/5W;hi+m5 ^SJK::r~[%nNk{3ut8:LF+DWxE!f|#T?smc^/=dCuiL!-');
define('LOGGED_IN_SALT',   '}6#m/qk+-TgLkG@Lf[Az.3&yD-F;dL%:8@{rirU$^S8zSKjh.(>6J-NRC,7hTPx)');
define('NONCE_SALT',       'jZFv/h/VZ=yc-j%TTI=l{+drje2Ng|)MkCPXj?15bH#@-[6!)g|WQx(YF`1BdP (');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
