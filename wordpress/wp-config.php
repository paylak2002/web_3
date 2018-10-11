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
define('DB_NAME', 'hotel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '|lVw*~oT3#cmeBv-mA$d:@$2`d<1R@oIPZj9c;Ddg:>~Fd6:SmkUt{z[p:[tAXqb');
define('SECURE_AUTH_KEY',  'bKh#g`C;!R#8bP7Tj[u0B.+U&7_rQwY[(@@J axH5:>UL#;~_yVBibdsxn9EW04_');
define('LOGGED_IN_KEY',    '.:}I7j@{sDH;M;u}4lqp=F)#xPX;BNn(E95+We|fWOmP9E6*Q7/{AHJq?R>i&c%8');
define('NONCE_KEY',        'meCALeU#p~;R zz{mEDR&<>Ax=5mmzuM+A?F%22a!{#-W%yI{g[!N5n-)Pzwz)`K');
define('AUTH_SALT',        'zJ]sS/Q?0w;]hC($2SJ[$ejw1tH{y)h}B0 JOATO#MsAq0BG`4wrIA?[8]?=~DL+');
define('SECURE_AUTH_SALT', 'gEzuzOxopNNBxl`U_~##KV(Lxce}Y~GN4hav=?D[t?-0Yef@4fYNiSlygPCt&8e_');
define('LOGGED_IN_SALT',   '/eWwc=UCYVzWl8tIUM.?FK+t7+hVlFLHOOA`2K-e_#a<luLx#o3g~C4[-Q#*f.jv');
define('NONCE_SALT',       'o.X|_}/#lEl7g?!WNCk$2/@tz!Q)87^j7*!>5,}~*(MAgb`p4QRfNRInRM1mH,kW');

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
