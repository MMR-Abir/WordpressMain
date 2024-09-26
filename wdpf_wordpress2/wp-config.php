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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         's9~vpezW_4oC|hn&Q|J(PNV2(iMnmmN!P<NcT**K4LYU()b}.h!2]TxUsdU9PT5i' );
define( 'SECURE_AUTH_KEY',  'A]%pqVRFQVYS)!X9)[m#BbQOpQgeZP??&1d]hbWtA-9B1t|mq*%o:g#E5_p ,CEc' );
define( 'LOGGED_IN_KEY',    'q<;$t}It:5siB<@gJjx%fibN!>ZuZYa`9F:?a>iBG_&DN&EFUIb7olk)Qn4 =N p' );
define( 'NONCE_KEY',        '!ge9Il@=VByH8Y@<]HqUn<tGRW=!X~4bP&h$/@v? dj;(ko8_y,&9JD5W5MGC}!(' );
define( 'AUTH_SALT',        '0VICIHVVy)(U&,hUZhb~jSzjmDNASjFA#j&BWs05e%9dWjH*}o30V^vYwwq[*pDs' );
define( 'SECURE_AUTH_SALT', '{n~$e1. n1E*l}u`D?xH<]=@8vt <qiH]dr_qMW?{8@>q78Ebg?8.FnS&56*bf=j' );
define( 'LOGGED_IN_SALT',   '_8AaF>OmI8?.C_yKQ0kT,{-$P{WBeJmmRxh@dkul]Enq5,++e|NXm@bb;wTXK@1X' );
define( 'NONCE_SALT',       'Jz9|:OXyftM&v1`I<B?9-yr$B/(?fIbQ}kuH9C:!DTDRF$}j+CLc<[KB?B9K7vx|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'IT_';

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
