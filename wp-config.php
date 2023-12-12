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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'XmAe_C2}ui[H-sv?Ia)|~q1=7/^Fm:?AHC6?wQxE=!_=3;W`GuPU,;b#)V]x1CKm' );
define( 'SECURE_AUTH_KEY',  'F)ON[[4;M`N`d%*n C{hZq~=5vF:H<tR5FY3d+DHc71G5MY]gGfA!g(=.z!%p4+<' );
define( 'LOGGED_IN_KEY',    ',Ah5jOfNI0 c6&&IHm /q0+qgpS,q~d5V>9VSL_cO`&`y<g%[D8W]#+*{{GOH=V]' );
define( 'NONCE_KEY',        'BdQHl=vz.TBQakSjC7HnCq/hhO)-`hjnU918oi+qvYgEN*{5gG!~3|!.f?CF)8?O' );
define( 'AUTH_SALT',        'VI}yEzI$d4h)E E3S6)?T4}.B>?pR6eC))3GbR(jh4^}&IhY^o)72D;<vy$Suh$i' );
define( 'SECURE_AUTH_SALT', 'o+7N0p2QUk.SaYT^DD]rxPG7oq-&+]5gZroCSZ$Y+@A!_x0:Qt4{4Ea{C&&y[lQs' );
define( 'LOGGED_IN_SALT',   '/bC-:$a:k}&8se @}g_B)+Fvd&f[6]D<1NvmQ_2TV<}|Vnk-4A;V@?+EYG*k[N#m' );
define( 'NONCE_SALT',       '{i^&9E.>%<8YN)t_hymvI[K*B^p-Ic7d_o(b;)fh#fYtK~!C&18Oq=r*@[m~(ghm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
