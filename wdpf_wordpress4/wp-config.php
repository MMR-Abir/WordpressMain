<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         'e&- GR~ljs@g`&-:f(.eBLZ~}/2OgBoM:,-P^GI)N= .UzZ|4*h^9[jRKH4D.DS`' );
define( 'SECURE_AUTH_KEY',  ';.qQZ%LE|EsXbB{EnK70Jbev~Ve$CnzAY]OTW^bZ~uB){5X](Ft}4+e552A0XJ>.' );
define( 'LOGGED_IN_KEY',    'RjCx=tu^hu}kZrA6Yb(,TZ>zStN0s[&zep`x<hBLGx d/>hk9cbM7GKx/eIE*F]K' );
define( 'NONCE_KEY',        'n/y9i5z-}#PsqUX$k zG2 (M]#r7hZb0h{.gJ:ABHogWQe$bYx&kTl2n`LtD{ CU' );
define( 'AUTH_SALT',        '`,;6ChmR9XW7u9G!%VaK3Q3]Oeu_++y8+xf2=90l$i*T k?$o*Fs7@SNf4O9)ZkN' );
define( 'SECURE_AUTH_SALT', 'Z5Xd+-q{ |*WO@${x?y9#FsAv+_2vOSdDGXVBx!0?c ;_E1%I$bty}vt}?f-dAS*' );
define( 'LOGGED_IN_SALT',   'QPMn/70/sfIk#1pK%T4%z#C*aRx]@PP8z6Yx<9LN#:{.QOs,}=My4xym(=}[v2r}' );
define( 'NONCE_SALT',       ';TVR_,JNZ~7eTx/R*p5Wwi=_~LvQ1Bl}/KO2?k>/NjWh%/5=pU9@.=X/FFyrXTTk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
