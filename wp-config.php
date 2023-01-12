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
define( 'DB_NAME', 'cc2' );

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
define( 'AUTH_KEY',         'Xp>Bf$g^t&2Alqvv7st5cR!5[GblCr*nd(P;./JHJ5WSIEm# ]tP)*A_3?4_%AZa' );
define( 'SECURE_AUTH_KEY',  'a`B@*tuBL^=Q#CS0Y.lc`j:::1t{0GB/{&xZ[vnEnM kUq|=F^)Wb#A%:[2:}N`h' );
define( 'LOGGED_IN_KEY',    'C(%=DpN3@7kYjv2)|%QKa!Z4v7925?G5n6B<dDD| < skyB01#$3wIL(Gj]C%~U;' );
define( 'NONCE_KEY',        'Uc}l>->LfCw{3NN ^)1!Fw74&He4X7a-#Nh;kc;hd8ov#G.3Vz=7~ i1).@W0=hU' );
define( 'AUTH_SALT',        'cah[<1_=x7?ARG!fXQy(rPU?@)Tn5j}du0$%=?<^r9zxU-!iVE6vIJzq<iD,|^_;' );
define( 'SECURE_AUTH_SALT', 'T9]}nJhKc :Ov>Ack=r#`Op#y<UhLY|}70Y9C.WTw}e$RV:9V;D3evOioaCAA27M' );
define( 'LOGGED_IN_SALT',   'rJr1PAKx1E!G{b8d`Aads2Ek~i<I2o{g9_M;v{FA@E*6>{1,w<U&ySYq=,T/S:g[' );
define( 'NONCE_SALT',       'gbV@++jHoc2,4V#1UvS9%1{_.xmUcSQ2jt8U4zFDb`-K,K*ARFa3VN3!B./!cL-y' );

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
