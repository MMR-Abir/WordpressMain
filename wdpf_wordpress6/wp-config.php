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
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         'jx58,qd57<q|yd[r}lqp=pG-?(rhj@_38R^O-qT<>}LX}khYN?uD8hZ4EJy|4y`#' );
define( 'SECURE_AUTH_KEY',  'GP$`IW]i%&e-/XmZoBXc5ghXimFAZKL;R1JPKj>i[jU6TkR/vMc>w}:fZ*;R 4S|' );
define( 'LOGGED_IN_KEY',    'oXvr#6IQz4MWT?D}luWIk.|!fM3H.7^gHt*Q42QQ]|~T2~kfwy5FqZKdq)^*8Des' );
define( 'NONCE_KEY',        'L~]k#K*lnjnieo@ol65V3oYD;ly.8LMs~pUw9zE;k99XGYwW9MHGc) 8L=7@r`/*' );
define( 'AUTH_SALT',        '@JWGcX4B5}H`u.u<P^}iu4my#E13>cAhJ>/gq41coYGh70[P#>lU^&YKZy80xeAw' );
define( 'SECURE_AUTH_SALT', 'r-r#!=G`GZoCq3eGLJ*Hm2>KHjR4%t!7o*A!li_4PH>WxS%hr|OmI}=tvX? _T{J' );
define( 'LOGGED_IN_SALT',   ';jE~@*i`UOF!&9w}^fQ1Rgq%0x!-b5rI$7>PFM>lvm0x2(eJ%Qh(Zg~)c~Y+<hFc' );
define( 'NONCE_SALT',       'Ck)E`cV9m U}y)xEPq]oh5%AGY+jOk[g.h6C*d=EB|sz2iuz*zo=sBtthKuj?+:)' );

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
