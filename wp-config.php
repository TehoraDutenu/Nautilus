<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nautilus' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'u&;yuXWP#k#cJ.bdlO)).2o,ln)8j[_sUX_lTDuh5?/X])AaOZ@v>Ci#!S^T7< P' );
define( 'SECURE_AUTH_KEY',   'KX-M,ut[8-`J|i`(#rVh6o!D6%(G+63=xfG/1nK7+F.V4`}CY8CTDm5mbNPh-woL' );
define( 'LOGGED_IN_KEY',     ':{r6Mx+<Cb Tk.S`9-A5A8#p0XW/7z%&tb7Rl9!.Yo+sdyYt*1IlY<a!q7FnaY9F' );
define( 'NONCE_KEY',         'CBE -wrpz}_o97?H=n$-^`F5#yR<=.o% >f:%;U!WB{(guyq*C)@x@aV;KqJMZfc' );
define( 'AUTH_SALT',         ',H-d2d__~&l>UpLC6l:M-CVL9yR|-vpB|77=?qd/m<Umyy=yfT @QwHR@/P6ObSM' );
define( 'SECURE_AUTH_SALT',  '1>_.01sPSI`+E*^{cq1EY7|>Keqv)P}riy_{L&>N=x|&i;.JR%S dSt0:?PERs3m' );
define( 'LOGGED_IN_SALT',    'Pr4fsO$g0J}fT2}0^;K6KXzy&}P0*^RISLJ[m-d3q/VX-c_a9gw>e3xL -BkR=%w' );
define( 'NONCE_SALT',        'tRgjSF2,$()ma*}T(fr-e1RN=?o_12`=!4il/qvq0uvMZBtHu>n-n.EZzktcg7KM' );
define( 'WP_CACHE_KEY_SALT', 'E:J/0v1aRnFsRubGi<?yi Dqn)p+Xtc>d Ru=~M0Rae%D/&yY?i>WCs CCtVkUSF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
