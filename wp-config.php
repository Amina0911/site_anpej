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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anpej' );

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
define( 'AUTH_KEY',         '>&I&]`)Z$y!QSr%Cwf0&H17Scy+)&G%*?}U^AAT8,?zuibIeqSK(3]6:7V$^T]N|' );
define( 'SECURE_AUTH_KEY',  '=B7y~VKNa+z&}xh*UI^t889KxV>EY])BZwqVqmR*W^vQ--M5wZs@@rK-A{&j<{)c' );
define( 'LOGGED_IN_KEY',    'CyJ*gBDZ#:E6r DR:7LC7:<^uKFQ>T+GnG$5 Ik|W*{T~&Sg9hPkkL@y!RY~5*1~' );
define( 'NONCE_KEY',        '.F5}+37%DC+4VR$j{^$:ME_7|gemXN,{7>/~zH`+E-}oVgj } C &|n+4O!lfcEH' );
define( 'AUTH_SALT',        'ZODFkKmnOx:|!n[`KM{0vJS#emI:#$F=hor.2h=}`z=W p$<Pt~DC9jC>QHo#u5G' );
define( 'SECURE_AUTH_SALT', 'l4{f+x5| ^5AEX*#b?ct)`l>N(}ll!V7g%`4Dv20]FvI@un1o4tWlz{5PN&DB#|9' );
define( 'LOGGED_IN_SALT',   'u]2q=5gYki]<x[joX_G$tPGF0|.Y;,En5jKBP,=Uui5Rh!zSl}y}<OB]Pbe% JEo' );
define( 'NONCE_SALT',       'j6an%6)?J{zfun`mLr1R:,8l(^]LFNY/@$<Bijt>l3B7P[A}do&-kkSW ]S_G]c/' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
