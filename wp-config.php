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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '{KfNLEC)`VQ%cA8}z>ic4u0X-$:=zv8]fYQ@X._~#vn&N>wvCC@g&GK-3DUgmPQl' );
define( 'SECURE_AUTH_KEY',  'V3M*yHb2C,[4kM3hmxLMrQ5qwXmHzFRlZ!C{@GsSa`W0qmrqlCJ>> K}}y.8@NmM' );
define( 'LOGGED_IN_KEY',    '>fJ7wAE=!LkbqZh]DKPsdUXa a{d62?,q~F!6TW5I7y=Vy7dMiMW}Wf9O@JIfoJ^' );
define( 'NONCE_KEY',        ' JL`?EJ$3~IA.L1]u~mNz`*7cqly*jB$hitwcBw_hBW2*($:6FSGl$jBA`:1>*PN' );
define( 'AUTH_SALT',        '(!;P~z^83Xk4;Pr*Do61N@oV)iWIv6KS67Q*ksa[ =eEW4-Jo>X|z*lA@cUQ&;%#' );
define( 'SECURE_AUTH_SALT', 'qC?&$jgagj5BQo5QH<>6kIhSv()1QTF@P[wr(%/Cygb$%A-pYZw554WC<nkhFZH2' );
define( 'LOGGED_IN_SALT',   '`o^o=DeeE{hpb0;7)!ddTvq4&M<@LS{j;%NeZGDJJJ~*=K?ib0wo.30S3PU#r.ui' );
define( 'NONCE_SALT',       'qS+apd!uppXKKlbS3Z@0f3Uq$J6r{c#u2}gcd?bCeFMEI1$!e g%,pe~]XSb$&Cy' );

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
