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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'vgNQ@Ek<VYh@H4;:*nEsTuI>ijh{E)i(CM*K!(_`V|LK?MSJ>lczoSY+8iSwZx G');
define('SECURE_AUTH_KEY',  ')+=.If[Y3|$Cbk4y{oLBrz`-y+HQ]C7IbB[l+(Q-$pO+4T]S[7;(2qkZkj3pnTF|');
define('LOGGED_IN_KEY',    'GBSN]mr+XA@]kV*q8Ld5Jt%8h=)470Icn)w7Y,~C_^PxiF#<sk9Y#?y#(B9BwBdA');
define('NONCE_KEY',        '==X$+u~:#w3jl;W^Oo]R<.YeB?33eqC%WA7-5U4567WEL~(wX):`y+-|{{Z$?r%d');
define('AUTH_SALT',        '>ZyWrnqZrz|E6@tV@L!xTvXfJo-k>c$#Z8nd Ezh<`y#QV6[!hnro+W.H7`ZKZ?W');
define('SECURE_AUTH_SALT', 'd6]h[F~WEME-;QVso6a)|1gQ0{t#Zao_y+Mj-${8<{9f?9Z5a pC+xzj#|;MPLQF');
define('LOGGED_IN_SALT',   'bm0d2[EZ*y0#7cQat:k$pBNh)#([9rh4Gteo,6*nnm9XeIS9tE1y>/J_.u!mB=tZ');
define('NONCE_SALT',       ')Csr+ab|WKf46|+Vri_;@ #NC )@|r ,*b6[~r[9pws|g6hg8-C|m[[/<UC|fJ9%');

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

