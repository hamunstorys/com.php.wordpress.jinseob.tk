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
define('DB_PASSWORD', 'sb410312');

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
define('AUTH_KEY',         'ta**)jPn7n#YP9l$k&v1R>? {D_BqzqAU<0dh~m$*,.^59w0%4TfY.Wf0JE}UT_:');
define('SECURE_AUTH_KEY',  'X,I_Ls8FnQN=fDX(/tC&U5q,,j2i>boOm,<jI!(tzULERO!VhS_[9hL[!}7bzci=');
define('LOGGED_IN_KEY',    '!Xfd-kIb;z>Z]L;`wWg, n(D:Flt/}(AT!CtD~:`U)HC]9AZEgyGs&*c-,.BY/Gs');
define('NONCE_KEY',        'u1$9y$-S9.J]bhYaMX>@FQT#,#`v&basmQN:|(`rq>$e~LuXh}O,7lCu.^bPexC&');
define('AUTH_SALT',        '>fKrGwW*|Y,??*T!zf>N@x*WxpK?BNnl7WbE5~4/wUMt#144P;{Dz ` bF;%SSec');
define('SECURE_AUTH_SALT', 'c)D2+6BFXz~]_~N1&R kl %T|h?Wl84hgP%6,0D&&Z(@$alAH&1Q#_?1IZ3x=@_y');
define('LOGGED_IN_SALT',   'u85_AexXda}K:01DBh?c<J;;DcTL[NkJrdXr3IA*L3%BR6@qYO&ds[`q4miLaD*}');
define('NONCE_SALT',       'NJA$5 K;ln|3%aW&[|)IZI%8}!=_okSZgu[}>m<w--Mu`LbP#JAvbOM5`_~UE9C|');

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

/* Troubleshoot permission issues */
define('FS_METHOD','direct');

/*Allow database repair*/
define('WP_ALLOW_REPAIR', true);
