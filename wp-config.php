<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'anjaly' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Anjaly@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/**#@-*/
define( 'AUTH_KEY',         '6Xe &luP<KjropLklfw<vmjP|9`ZSdh?)K J}t{mXMNva~>k;J9|eSpULHw1D`ve' );
define( 'SECURE_AUTH_KEY',  ',r^*?1(+>Vw;qe`#|.kudcK~)3)?%1iWNuQ! +&TX/Iz41n7h2hN-UVomaT9(-zq' );
define( 'LOGGED_IN_KEY',    'TuBPhc~}P<^8KaV7~q6vBrGN|cmIQ08DgmKv+7#B @;b{DF%xN~?=vAYwkl)<=?{' );
define( 'NONCE_KEY',        '9J Mlq!aV_ 0KxJ6xPij;S&e B=k$;@YPVCXAeN%es~^,Z}uoFV=,nTS!EE97n?L' );
define( 'AUTH_SALT',        '$uU[w[/SzFZRBQ6`[;c18w}SStz$j[%LtoUMcH3>jEaIgrD1G1V@+A.PefT:saD/' );
define( 'SECURE_AUTH_SALT', 'VFn]tsu{#hGY`E+)<Q,Lnr.43i}7|ptJ#L<2fhmRr!4u;|o!l{K&&e/>+lGGfkv6' );
define( 'LOGGED_IN_SALT',   '<tL%m8is&arJ#g>qENJ2l8z,tc+kKK.k+y`P@Xxg-qM/tJr?M&,9[t0rIW|VRfyk' );
define( 'NONCE_SALT',       '/.>I-H^=HM~IwnFuYG u)i6SFwd7P4m3}1:PJylAr(*dE+w-=GUkTi)~Kj5_[ .!' );

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
