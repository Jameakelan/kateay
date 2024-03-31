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
define( 'DB_NAME', 'kateay_wordpress' );

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
define( 'AUTH_KEY',         'R:&!RQD=CL[Y[W;x7?jwkfOF?|B>!%_K7y,l:K`z^-FD?V^jo>|IP+gX3/RWl;Zj' );
define( 'SECURE_AUTH_KEY',  'fkbWk: 8$J4UM*[q ~UpluPjN8fVNimlI;O_^;mL*ag#@QWL2_5RZ~b8B]82|b37' );
define( 'LOGGED_IN_KEY',    'NT&w2=p3<J$mU{{a?U{7?vhT!3<T^MU-nbH4(^pDi,r,<u*qneC&BS+3?+%1xc*7' );
define( 'NONCE_KEY',        '~K-G?6z?^`VKi$Ti^bab=>iC+J!**N<>Y)uV@6TkC+gv6?Z CA wm>vAQ4%8_NXr' );
define( 'AUTH_SALT',        '|N(,<xLCK~}G[ztZf{UDW1hsVrQqEZ7:UeXRkQ_O_k$c9XI,D7D(`5]iYKk!`>5H' );
define( 'SECURE_AUTH_SALT', 'kX[}oIVu5:xEr0i}tfY~:w<$Q;jw0+R<1J/n-WSr]m>>&]ZZa!rVMcT5?Bn@qhsO' );
define( 'LOGGED_IN_SALT',   ',W>I4ZNy]YXG{xC(!L..xuK$zBWKi6J@%j 7o-[<DvaAXrvcV{</:y#$Vh,5`WHw' );
define( 'NONCE_SALT',       'o)1)q|)#[MbpZYU!~fA8K*HMDL3?4RP[|YUcwOo<F>f VoH10W*?4!nEJ{@!}I%i' );

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