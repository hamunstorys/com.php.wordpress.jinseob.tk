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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '_URDU6VWpd+X%bLdv65r2H8zS+TK!Fb=dA@_L@!+gd#TFyXb_CJjnX2btsnYkA?g8s9fdcru5F@WPKXjqhYs#y_yFK5Gnve3=Zt?!fYQYD$42MZk_F$5#Uyu29@btG&5Nz^5hz2nC5uA6uWGg#tLxD+reCKaru=P$-k7Qc+G6D!&nzg9ZFGj+Y$T?@dbQ^=Q@+z6Z7P8+9%Pgn2#2L7&rQARL8Xh4&Len9VAvRpyE=gnKaLey*$JqRQc5m_nSFUU');

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
define('AUTH_KEY',         ']|g?#e^Q2ya5xGJpK5ADK?<bHu}Io+}q}Kjw:&7@<:8k|qsJ{/sCA/tKR+*(_Di;');
define('SECURE_AUTH_KEY',  'HMM9?2BZh/yv_;1`,+ShG&Fdk..DrvXY*bc%16fVOZe)F!nC!~=x_sJqn(7{|EiY');
define('LOGGED_IN_KEY',    '&S@C*3AQ<{M3b~?-s-%*:8Hw3ZTWJqfUNKHUl1p}i#;Xa}nrHqb QqP/-+,t0cT8');
define('NONCE_KEY',        'MDjd-u%--f@gAg`+-BQ[ppmErwxx2-o@sk=|M+ubeV|V.CBC-`b3}*#_ksnXo(Eo');
define('AUTH_SALT',        ']0|)l=n)pcb=+#NmyJ9*/{c1{b,K|?ZdP@n|@`!;Ae](Pz[ sH-~Z^k#Bg?GA_2c');
define('SECURE_AUTH_SALT', 'ap70c{A !EIKtdNR0V<iLdagg^?HA[.=FR+N/D?hPp?jQ~(6pEP3cG(7ecp*#|mF');
define('LOGGED_IN_SALT',   'xB;0g T,TynJTFtq*-]|DA-TTyHz]B~E ;I1z+R|p|*mkw&nWN!4$v#T:z,{K1Ml');
define('NONCE_SALT',       '^M}1IpX!nmVj7.(E^T_T1v+p:]Cr`j-f1oIRB`2~c.e#?m:zFm#|@-2(OBrdT6g;');

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
