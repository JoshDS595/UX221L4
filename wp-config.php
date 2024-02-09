<?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.5784731357386048');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.5784731357386048');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY','WZw7S+TW9)2P*W=6@*[twwI7Ps6b)h^6Fw6c)eQs');
define( 'SECURE_AUTH_KEY','43O)Ro#d1an-RT8BxV<?+K$v0HXkUpTt$*vb2PuF');
define( 'LOGGED_IN_KEY','Q6D39KPC/Oc9e5@1z>=%Yu$Zmo<#,46_Qk,yk>6l');
define( 'NONCE_KEY','3.u%4mK!57<3?L5OFi>M<?3cfwxzXok/!nw!U,^Y');
define( 'AUTH_SALT','.DNe1EI9a3g.6#,Vsk?Ni(7UR00bomO&SrQV4[K>');
define( 'SECURE_AUTH_SALT','4HHR+32<Vl3YOabxIG<RGNw0uV[FOJEYA,)P9<+[');
define( 'LOGGED_IN_SALT','_Mcy=e@LgBEKCD/q)jC4JbuRW4VdI7zFRnnY&Wg,');
define( 'NONCE_SALT','nb=#,I!e$snyp-rN@L1C5-#gcLlH=[C-.a#UZxjB');

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
 function wp_new_blog_notification(...$args){} 