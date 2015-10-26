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
define('DB_NAME', 'endorfine');

/** MySQL database username */
define('DB_USER', 'endorfine');

/** MySQL database password */
define('DB_PASSWORD', '1qaz2wsxcde3vfr4');

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
define('AUTH_KEY',         '-S%qS!<O7NDpk`G6ed2?Zg3it<!0]1.+x>{O?P>Os5=>K@?KhP$qJ7ht&0x!UoKv');
define('SECURE_AUTH_KEY',  'YF@2ZtND|Q+=.5CtH+,66Tm4@KPdw5|^?b^_|Ep`%}1K{Bkl<6|aK1|m{MgN0+?M');
define('LOGGED_IN_KEY',    'K.VtpN2lP;^.lS0%TUwi;d0Jjj-95M^7AOrcmA2g[/U!f] ..P||FAdlTg%895w=');
define('NONCE_KEY',        'WZ)7U:x*S4)Z5jLM2rX<?/GlEOYo 5DkXHZ%8B^uMsBLXZg;T)?je=J<>q1Y9%+q');
define('AUTH_SALT',        'H^i(9p<S>x3TvGPZNn||6%:j,8]+WiLC^+lskrE*z*&,SQ_moRHh`F}*!6-Xi)nv');
define('SECURE_AUTH_SALT', '-]i-gJ|vsqaTQz^xjpmu$Y7s$Y/;=u@&V;ZJ#dV8pZS6S=v5gJb4U=1#I;|@EU&W');
define('LOGGED_IN_SALT',   'E|}5r8 H)kIi!sG&6{gy%+N5ooxNM|R5w^#`I[UcrkrIB(c~1_M9eP]]a<*Z$ :*');
define('NONCE_SALT',       'qA%c|y_q-T3Q=z-xyqW! .K5j_*9?KE:QtI-I{tYn&><qL7pcNr<x<3y`1!PxJHh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'endorfine_';

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
