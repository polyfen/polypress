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
define( 'DB_NAME', 'polypress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+NSYVlmCt/~s=R&1vT8A7|jDUI!pGRX;?Epd><whs_57rh1ld.ytAHVNTk_:lVWP' );
define( 'SECURE_AUTH_KEY',  'ls+5sotvwAaA/a?A2f_1X|alB(ry3S^RbUa`{?Am3jybT=$1S6zrJo1A3lvc[[nB' );
define( 'LOGGED_IN_KEY',    '2B5:|o=ssjB.crW/WBZka#NSIYt?4u!nv}qqmxTBq1P|5 i9zH)IF,Y&0}~-4{X/' );
define( 'NONCE_KEY',        ' Mn#{NO2??wCEz6db+WZ/g^rv~WnLzp0$*R@3XGkXm,Mk8!^:??eb04XA;e,97UP' );
define( 'AUTH_SALT',        '3}F!GfOsxyK]%nB$zsMATHq%2x,D!}s)/ctoCb*BM#zN 9x,|1ZrV[_rW-r*LKCs' );
define( 'SECURE_AUTH_SALT', ' `HlVeCd**l#=xvrdxR!=.vdP{;2LR0hMRZ:0t(55.y$o#:Q,VsXV9sJ$UrMzuX$' );
define( 'LOGGED_IN_SALT',   'l0:A&pMK-X 3abv*Y6^Bdz]*Fh`<WS!PjMvzuv!ox,B>LF&Yg`:*oIfb>&L(0yT{' );
define( 'NONCE_SALT',       'x3W>]lVNaE!;anG nyc<4I:C`9A=}TP7FMzQ=(~T%LbC]aRdnvvzJVXo|11vl:T.' );

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
