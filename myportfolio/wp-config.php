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
define('DB_NAME', 'myportfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'iaruni445');

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
define('AUTH_KEY',         'oAhS/K1WndSFdo!EUMA)^WW$<Au+Y;moG-;Zg*iIyfyL-2jJWGyo]l1+v* <10-1');
define('SECURE_AUTH_KEY',  '2[yC]h#mEqU<Vj%J{t`/;#fjw0LVpf:9G1Z#d]iW0Wce&bf[NeJ|/I03~g@VFPaN');
define('LOGGED_IN_KEY',    '+(X4yXkN33&|Bs>{VaWYUgqsYjt+R3r<p^}91b|r_k[0gf&N9=[qjj>.u8SB8:`?');
define('NONCE_KEY',        '%hAq)*xGiEdS0vaK#A^*G2$GMRSQnSa=dc30BM{x$wRe415ob#]P]$pDLRf.:ooM');
define('AUTH_SALT',        'x,iKGKeH+nWsJQT5&)W|n-NK.K/oz>R8~C`SXT25d$9wQt0oP8cGS=T;g<Jgu,/o');
define('SECURE_AUTH_SALT', 'D?7fd|0RS+:cV`j:D,dwNp=w[zE[Q eCwwZT 0J4n<>23j#4bpka2YfY,Hqgj|AL');
define('LOGGED_IN_SALT',   'h8tsxJG-&.QC%-WEE<2?h%vs@..7GO5YwIi%ai~.~-3iB f`w_2APbdKNKttxj43');
define('NONCE_SALT',       'd6$],sI;<;RMHnzP;e#T(mqqyN/NW>a#d-`/FgOL|7)`-k7D& x[S3;54?&p44p3');

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
