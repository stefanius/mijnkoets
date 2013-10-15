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
define('DB_NAME', 'wp_mijnkoets');

/** MySQL database username */
define('DB_USER', 'mijnkoets_user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db.mysql.mijnkoets');

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
define('AUTH_KEY',         ')-9EeD_J_lfc=/{U#S YP`{|>-1itp~_-D>o(t;}G<.w)-=i1XL2+tEfegQ$lSl6');
define('SECURE_AUTH_KEY',  'w7+G*<k|1wi.lsIv>SXiWij-pL,f_8{cL+Tw9w;=-j%;:GrbJn+RX }^AE&m|C-)');
define('LOGGED_IN_KEY',    '1Cw7|4Tx%-F(Hl:V]7J88SVyFfG~c+]{NneL/wd/-F4v;Wcd2D){-]]|cAicA8OD');
define('NONCE_KEY',        '&<7{K:jQMcy(P!o=+W>1jH>h;Kw-of-&X#~=+rx*.Sr&il]+BIs[CIWLp2*Uj#!F');
define('AUTH_SALT',        'K;>J2gCBP|*1<cf`5U!-+dSq7-O{NVCcVP@e2S@)yjz5K:p.4yT+bd|Ui ,Q3{WP');
define('SECURE_AUTH_SALT', '-YXTvrbc.[~3?Y?8f|/fr<d7exnm1^`vnPLAXij+vIr_%wUu=?LK%]Gf5(+RNgQ-');
define('LOGGED_IN_SALT',   'j3a(ZPlno0U~; d-_GN(_qb{*h8Wqt rI,tC#Ws(]$O=.jSp-vR[fO_?:Xo`~0aF');
define('NONCE_SALT',       'U/C<eUjb=}c7[V&gh5ncA+7l]pm7f*$-5@ZHJhNDxcc=9{PM(|-#Gx]~h~>FTNm@');

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
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
