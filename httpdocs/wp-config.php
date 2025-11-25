<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_9ebyw' );

/** Database username */
define( 'DB_USER', 'wp_s8zvd' );

/** Database password */
define( 'DB_PASSWORD', '0%SVQvte_bneyu99' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'y_rt5OL8rDW]r&x8lvuIgBRxgg-x#(9~o4AtUpZ*f*McO+)3(dig![1JT+_9qN5]');
define('SECURE_AUTH_KEY', 'X*1&);b0O+]OP|R[56oq[7sa[(23t_25KbO5Du/F7c]1!8GGm~KtaiF[DzX958K8');
define('LOGGED_IN_KEY', 'WEF1*i%lNauz-!;*bR5d8j4y6_xU%8480lIzc1@d#T%hxgG2#S0hpiZo~]2sCe0:');
define('NONCE_KEY', 'x22|tdpZq7i4Zyb2X3Uu5437su%J92Sa#SeiDI82)]aM69@l!3v;]Xq#4145tMII');
define('AUTH_SALT', 'ID0m5y!9UJT0]3;F66(9qu881/x1u5)xCLw;Sqb4E2D|2ba5h/_23aE#x/[@g1B%');
define('SECURE_AUTH_SALT', 'IEu3cQi+52&[Bl_gNn%1h6~ye3~Mp8wrw7)|O%oL3E8u|zRx5ScC#xc]gCk&Mhj;');
define('LOGGED_IN_SALT', 'J%8b|2w;@H:)%JF05mrSNnmC;%4#IS6s/5RpaMT7j*:HKGfmYp*CN_9m2N9*Tq1/');
define('NONCE_SALT', '_O9qyzIPO5x&F3628;G!8g*d*s1-E&*(s4aj2+Uha0kO66_VsXc44_6T1w|CeCgs');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sPqQVzl9_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
