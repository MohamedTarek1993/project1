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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         '%V%Dq@Y.-bkB.hFc:dk[Pf27@EOvf<D$T2M[gTY76ywX/@(evo[{+fuDpE-Ix@GJ' );
define( 'SECURE_AUTH_KEY',  '8]tHh=[MZI+Pu86=`-J*k1tBZYm<Q^SxIlYrYZ9<uY)lH%i8~APr7Xg,3]-sqZF.' );
define( 'LOGGED_IN_KEY',    '6^I^e~+@Mh_XTE@3Pe--3)8z7q5%.KM>S(aasg5`B^#]%`1F^2|e o;nuJYzkY$G' );
define( 'NONCE_KEY',        '0$J0:fU3_;Q^ &Nl+Ag?&[9IG_At$X9nwh:WN};z<BdwTF8bHUrmdCf@K,XztgHy' );
define( 'AUTH_SALT',        'R.yFn?{uc5{sk@ixn8H6J<PA^44!<SBJ}&h1l[WN8v_S,&$bU9G-C1~*<c<U@ufB' );
define( 'SECURE_AUTH_SALT', 'gTuzVi0u07yGlWaYvw3<@CC>>>w|m6kJj yd!V<.@v,py:1e3Ojhh8jN.D1F@<O8' );
define( 'LOGGED_IN_SALT',   'myMvp(iMcF>{M8{:&EN0Y8r-G*6V7Tt}f _YagR#xF^T<]btKR0SJ>-1=^F4Vr%Z' );
define( 'NONCE_SALT',       ')kN{a~4#0 NDUM(]nP)kH*ZLQEk4AwJpo4TJiEGz~MYZBg?Y;C;2:6}6mH?kd9;.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pr1_';

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
