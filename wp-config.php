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
define( 'AUTH_KEY',         'PGxLYG+@$=a6S@~g?h}=`I@YilG(y.QNHwH|F@h /?+=*(cz~+RPdD&-Sv0LwpF[' );
define( 'SECURE_AUTH_KEY',  '^nWQk+A!;WvxD*;vUB8_*3ZK;cv|IP4u!e?Fe>o<*)+x-[5j40M]^zB:+s<kbtgZ' );
define( 'LOGGED_IN_KEY',    '/;WrtCiz{ze<0pAhI@+v/JT?8rnsEb#~mRIi^D1^WD,`5kImEezHis!9SiZ+%H$:' );
define( 'NONCE_KEY',        'ORjnw1%V~r%Byq?|%)gy~Y$<Y!x0}1(IA@`h;72T*]LHi>D^y-&ED xI)u8&xYf1' );
define( 'AUTH_SALT',        'DMBKg^{[j 2r{V6xi$58{B8E 2C=U$dIDI8Z(1WQMXId,h)CB2ty>h,O4-d@XhI|' );
define( 'SECURE_AUTH_SALT', 'Yview(/ALPxn97 Q6WSzQEkxQYbfU4ch.zAIUVJAA~y71ft<N.j9f$b}kh2-eHg,' );
define( 'LOGGED_IN_SALT',   'xWS`u#P<1uC{T*J514g8Oi<sc`8Zlz76MugM@JU3j In{ ^ Ub9b<9(*1Mn_E{#;' );
define( 'NONCE_SALT',       'c2^:DsBE{v#rYJ D.@bzU9qolQC]8w@b>]J&]c+=tx2ahe;8+<O;,+`VjA@*aD[z' );

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
