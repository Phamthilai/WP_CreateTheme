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
define('DB_NAME', 'wordpresschildthemeshop');

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
define('AUTH_KEY',         'Vluu&6p?v?SYhwteBnss8I4Q`0GLWK9k@n]f#Fc/<8`(M*yYe(C]:.eQ;+g _gJ+');
define('SECURE_AUTH_KEY',  'N*Vjffui>`&P>l4B:d8t{9f^.aE2^7Sbbu]q)/YME!Z_P;:qkf5jX1_Y*9%|P$ZP');
define('LOGGED_IN_KEY',    '>K%,k,/Q<mm[C!n:972mf[`Q@_EHf:5uxe(Cyp(`@/.=E2^NJz[0U*4.$7>K<ujY');
define('NONCE_KEY',        '{EmH}-6Q,{Dpw.6g}N{-K]--C4O?}7j~GkCBU/Sst:tY&xcstQa8+:[F8^EiSsa7');
define('AUTH_SALT',        '-!Z}g+8e^wgMG|6sn3XhIKX$|}GI2>dB$br{:1U[k|*|s9.;t8{c*?jFXD/[B6#v');
define('SECURE_AUTH_SALT', 's e`HGai7L!9|(<k8y?I653U84YoRsRrp6!6<;Ld Y:;9DiIW>5P5z/7jBi~a|fQ');
define('LOGGED_IN_SALT',   'A^Z4h}:{M~B{sjG@&LIM}ytH3D=+VRKqq#byU^y?dd)vP5,t_n-8?Q1z4L,v.g,[');
define('NONCE_SALT',       'F}HTnX*Li8?SQ83zGR&7:kIi{~n;7uaF,gf@^3gqRy^nmR?juMWI0Ng6vh+qD*Ky');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
