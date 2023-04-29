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
define( 'DB_NAME', 'blaxerstore' );

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
define( 'AUTH_KEY',         'wAp[UE44$Y;ZKTtwze9LU8gB;|WnJs51,2Er3ERyBZS*^s{KCwUXOPaNTCL6(;SG' );
define( 'SECURE_AUTH_KEY',  'yxLGM5yX5;+o8k7Nrb1o.}e5F/DVj)lv=%h~dIT~gQG/@w%4Hq;3KKTI7!0&(> B' );
define( 'LOGGED_IN_KEY',    'GH4?0U7iXTQgiuw^s{,(QM{/9*2%JNNNq!%7:JEg7|q<U{)@bF89? jo;!OTfF;c' );
define( 'NONCE_KEY',        'sH=89-_Eo%0&-B5cADZH/%t8oM)%IMfnF_?5o5/[$_h [toG~xfBZCMxYDi{_=/c' );
define( 'AUTH_SALT',        '+=Aw6f#_rfOH-Z2TYiRAZ)a34ggn/v]4u[)M:xUd3S[Zzf!BeRT=8ok-_7tM^/W_' );
define( 'SECURE_AUTH_SALT', '*e$D3QF{)e:w>kYA1<Naw^FeDillT0tWMUjd%{5/5=T`hf>6+!a?:I~RwC$-f&9{' );
define( 'LOGGED_IN_SALT',   'zl/?v*8SaE0. gWj?3F@V!UK}BO)jb`b(yXurUvs4p:N[i[5u_)/]mpu<!{|T)j*' );
define( 'NONCE_SALT',       '-|sU+4QZAow}w&~(54rSZo`bp;(~XP3 OGYjVD3F1DYl2c)wy3`kh I@G^G{ xQ2' );

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
