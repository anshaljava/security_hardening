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
define( 'DB_NAME', 'Security_Hardening' );

/** Database username */
define( 'DB_USER', 'Security_Hardening' );

/** Database password */
define( 'DB_PASSWORD', 'Security_Hardening' );

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
define( 'AUTH_KEY',         'vVl*tdr,2/n8PmNaV.hQRz}Yg]D`uMjqoGm}yqlJM^irw8PNOEgjD/JsnEa1*o5j' );
define( 'SECURE_AUTH_KEY',  'V&jGKLqSPHvLl!2hos;de:}&[39YHWeN^h%:tfy31sZIT3tVJ5HCI1 XYr(Y7|PI' );
define( 'LOGGED_IN_KEY',    'n8hZ=^7hpI+.Ed)F^=5t-38lnqC.q2xJy7Hh5,^sHQ9~l-&fouh<L3 hZ4!LM6JB' );
define( 'NONCE_KEY',        '%L4Bj~hK*4o0gktAv>R@,tQ)*1UoR%b|J]>.z`^w*~AK`Y@cf);;<Fo&t;,3?tW@' );
define( 'AUTH_SALT',        'F!nBe52oxXm+4d([9MhXMR[`5g+s8G:hyK=OX:BaflRgH0!BOG4i]yk>;Jsk`Y%2' );
define( 'SECURE_AUTH_SALT', '@2s)1w-xzzi*J->OL&Ww>52[~x,&9LzISd93G~@ }d@RR45,^{7c<o@B#Zn.A+E^' );
define( 'LOGGED_IN_SALT',   '[2?YY-,%y1VCS &`<CHZ;*c?xsX4OtGMvWf[f!r{[lDFSSq<NZeLGVgyu]}49@fd' );
define( 'NONCE_SALT',       'QB#;>r/J<3^QI;lIG{)x9a.sy:eUi.`8B3|j>{&4I D?]dLq$L<D|<K3yW.e80>7' );

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
