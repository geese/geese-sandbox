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
define('DB_PASSWORD', '17luke');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'CZYw,<RZO4m.2No=p)%:,bu.hisu*q}8T2hE-%We,r%b_;}P)cho~-w[H:ZX?)ju');
define('SECURE_AUTH_KEY',  '9u3hKwYu;wx@{vpSxxn0T)9g9S$*l3>!P!(~CG93}vk2cwCO%7SK^I@1Sd2w*E|x');
define('LOGGED_IN_KEY',    '0:u*@T5}@QU(*oS $eA#1wx,|Ts|`c-YgCHc@i4)3OynQ 0*Bj7Ccmp.22{MLCc]');
define('NONCE_KEY',        '(xU`O09=bF0Y1Ck  ZA~OIDv. Jcb3ut2n7~g<M f,qVy=>yZSN2D|FQEzP3^nRK');
define('AUTH_SALT',        '6E9 a,YB1|*(7t%G<?+r)BKXcUvp_I* zGK3r1nlW,(9Jb<*i5NkkkQ *+;C.v3L');
define('SECURE_AUTH_SALT', '3z1CSxs:9rxM4h,tUzz1;Lq8(c!@9;2+z{@e/K):NNx0O$gq[/kivIxF[yAL7I#@');
define('LOGGED_IN_SALT',   'Z9ph.@4Df{U7<>gHepbmznN~b/:y7&]G$j {Yma_krzNp-tCz6`|x_7kw|5[/ J@');
define('NONCE_SALT',       '6#`F m9m)zxu->%pBy>=<=N4IW5yo*)8W-Ld3m{F<NIAVJ%/=j]cGFI-r1_LOXS`');

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
define('WP_DEBUG', true);


/**
adding debug log and debug display, 9/19/17
https://developer.wordpress.org/themes/getting-started/setting-up-a-development-environment/
*/
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
