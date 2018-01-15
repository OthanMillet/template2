<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_template2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Er$..vCA#A<76hc-}cXOZUKJ_Ti~~2%]nSvjW)SlX<ccBRJRtXYiH|JMYYTPgafE');
define('SECURE_AUTH_KEY',  '4v:QmW2ys[yLRRcw!$<`Mzuoq=7:N7D3HYLvx<5_EtBP5~YJ#AK:7r)CUH{?Ie,;');
define('LOGGED_IN_KEY',    '@h(`>5Q-cCLp{XPX@UX=:Q~TwsR$&9$I5~tV.,/o&Pw$i:K6iC6_GUZ&Z~4hy/R.');
define('NONCE_KEY',        'E|7c@e@ZVjby^Ok^,CtQ*B~F5G;eeo:Ck>xMG(tME[TIYd38&$(X-* 2WN3 xP[x');
define('AUTH_SALT',        'pE~J{4w%rIW)6Q;F^ie=wCHp,PP2$Ig}R6D!l#f-R}z/2CN(Z*KT.VJ|V9szH],.');
define('SECURE_AUTH_SALT', 'Uiwi4o.i)ph^6.[4~njq9d#exxNvPAX/ v[jhBg7tI.JK.YJr%|uK@vQ,M_y*+{]');
define('LOGGED_IN_SALT',   '8dVm&ddd^Wp|rBOzD]gJNC~^M)AYRSZ!$S8-=YYV L{S]<At,e@hKMeohlkEQ}Pa');
define('NONCE_SALT',       '(=w(Gy4hi;nCHl/JetP$iw.fT~Abi[zw=qO^ [-QIX4Kr9eY~cFS/et=:2L#H2JD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
