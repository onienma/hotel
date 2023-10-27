<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         'T@sG1-rZ.T+$l_QA{~D<]0+.fP6gt,sNeT*wV]{D765%JpX:wpfZP!(gItrCy+4_' );
define( 'SECURE_AUTH_KEY',  ':_yG;sYn]GCJ5:{5 [ssd^FSr)8Cz*JJVlyu_Lq~xtxGNnmQJDziNY~0xc7+~K(;' );
define( 'LOGGED_IN_KEY',    'c5cKOY:`snir^^Q~F.cNc4Ev]{4>4lX^]82nZd=mA;Sy0:z5m7}(sx4{gPxvFT+f' );
define( 'NONCE_KEY',        '#*}M>s#`@awC~)Y %*[6<D mHqLuYgFq4H9-t+tKtyR(| h{I]io6QZdx4C-wrz.' );
define( 'AUTH_SALT',        'H*j`m$<ZuB;@Gb+W80|WSM*;qaCoxZi>PWdDPQ|1.QojiSIg-z[uwH?!L*uG)LE!' );
define( 'SECURE_AUTH_SALT', 'Xf&*7uTB$= V2ZW(g@*@ |I1>)R%)eG*=B&@9dDUV%D)M,f{l:MJZad~g2kDClwx' );
define( 'LOGGED_IN_SALT',   'FWp7k<2{8jRbRTo=oVpt4Y:%W);xm>_jcZZ8fixhrL&4]AgdXWyF&wMxT(E]S=<7' );
define( 'NONCE_SALT',       '0qVny):/Q84Ft:@}};ZY00SmW:5S&L~3fqTR>>u@/T^YQt|ZkKv{FDWx-Ws<p#om' );

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
