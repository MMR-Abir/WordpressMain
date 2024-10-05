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
define( 'DB_NAME', 'wordpress5' );

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
define( 'AUTH_KEY',         '-Gr$Cj.s>Oc[Mlxg@aY%(@c#&`&8G]<`fC16i``z[ix4i$0j))MJDfl_hbNmehw0' );
define( 'SECURE_AUTH_KEY',  '(2>YK)dl9^NqqX^d1HCc!w$^o7(-@_OADb2iF]ZmlE/;EyTA_n0$]cBPa=[T$&V+' );
define( 'LOGGED_IN_KEY',    ']6DX`+GAWGob*GD}~@eArYTZ0sQgm>(|t/5u(>f 8~<:*UPChmV1hpPIE6K|S28I' );
define( 'NONCE_KEY',        'Ym0=SC^oxnjE}cdr:tKrzqMoN/kWOudCShA{.b^XL8#=j,f%;M-=ft:e)w9{c]%w' );
define( 'AUTH_SALT',        ';F#dc$pqoVLA<qqtbT}Zn?#[;{;0-em?fzaTh5tB|%|X>0$e~#AtZUS-(jG3Kj3p' );
define( 'SECURE_AUTH_SALT', '3V7DD`4QTk@]4P-}wt#sh,AG/(G;I>[Hq8,IBM4eHbbzg;)RwZsyKMO zlRVO!-k' );
define( 'LOGGED_IN_SALT',   '<FEWki{l0VYY2qf- D|v)2q#v3RYf37Nu:F2u]{362A//[Eh#Rf`#m@lan,#JPy-' );
define( 'NONCE_SALT',       'ZR=E7-<)VrIK`5W]iqq3+4gzh1@vLlHbkDT{oH[_Kvrz++EOG0TW!or/D=8]2E+O' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wdpf_wordpress/wdpf_wordpress5/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
