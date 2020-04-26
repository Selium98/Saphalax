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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MYSQL  settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saphax_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ED3&Oj];Pe5Q-u[MNEp(0/DZTC>lCRT}88|T.bU?)(&< l)-rQb0k[}2t2^9`HX&' );
define( 'SECURE_AUTH_KEY',  'P4I j^d)sQ@1?8i+*GC}dp#mw6G}1P0SG&8CzRiyH<_Fq+J(g/9?Bb{I<zGfc0|w' );
define( 'LOGGED_IN_KEY',    'pyzS4!]bNR}2}&BkUb^[FRe|Zb4QH4.qAwaw>2->*r/;RXj9`)N/3rcO>*Nh=(J7' );
define( 'NONCE_KEY',        '9z&q5JOY:C2zA6z1NPp,v8/&?bI<L^e3`w:+MK+wEe%0_9sH8]J/JZ9Wf.ki,IO!' );
define( 'AUTH_SALT',        '?!npJW]du{?#@2m4t@2b[EYR;<T{ZEoRL#f2~mUX4b0Can7bz}[aLVl6I0-4qP5B' );
define( 'SECURE_AUTH_SALT', '.pu@k0~8^Os&0^R/5?rCoIr`B&GGSoFBJx,@SfH[RMDVjMg;)nIW`+&:suQh8Rt)' );
define( 'LOGGED_IN_SALT',   'r8>|!bOEoE#o_-x5+G3A|!eGeC_8>d;zas3paO,3~b$-ilgh5R>m,lPUyovAjvnC' );
define( 'NONCE_SALT',       '2;d~mp6<0^,hfS),f;>P6q&&_Q=^h9#gL^>p,HzfQI<_Vh}=T&/ArvP*8R:;Ir[d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
