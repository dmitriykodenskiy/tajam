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

if (getenv('WP_LOCAL')){
    define('WP_HOME','http://localhost');
    define('WP_SITEURL','http://localhost');
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tajam');

/** MySQL database username */
define('DB_USER', 'tajam');

/** MySQL database password */
define('DB_PASSWORD', 'ks83f78gjkbA');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         ',c4}Hw* ->~Z*D_I@I<uIZMJL,U]NC9}yoYYQ5t+P7,MkH[.SrzUDqu`0z@A<9pt');
define('SECURE_AUTH_KEY',  '|Mk5Y?@e*ubB%ISgbTdOyyPME;K-aP[10i#q$w(4nZP*4%t[(m3G_kaAn>!E`?a-');
define('LOGGED_IN_KEY',    'bsOfK1Z:WgY?B<W16LpVFf D!c9udtao)e:1r][qVV }8T^Et^T*0E#>hF(neoie');
define('NONCE_KEY',        '~jk,`UFTu*,)=6|IgAI&Y79`lefo*|e431H|88SvsxXY`=%mh*o2)H3|+D>>RU8T');
define('AUTH_SALT',        'Q{zLxr5g{5/dB3BC2xNf+N{;lRda~<@P`Mq=CV&>e,uPb|QnIBGQ^EIr]z*AJ}[Q');
define('SECURE_AUTH_SALT', 'pf9p;dv3o;ZuX:aWYDF/,[IqvpZXAy=!;E|}iyb5~m1M2jXtG=UOcZ^yI8];A/lY');
define('LOGGED_IN_SALT',   '~tQ>)1`n*(?#AIiDa%tG~m|IB=d/[>lzXy~x)lT1_Bd92?_GvL`L!QPmS=iPShJf');
define('NONCE_SALT',       '*VZ$~]So2}=~*zvxD.;$k6p.GF#/.l]Zxqu=!sx<W.14|lER8x@d)wl !*olFbDU');

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
