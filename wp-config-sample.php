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
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rdh(=oDZIc0x[-|9l+)xj+Ha}@14?ycnY_8;NLV$;F)$r|ld&[^dlVN|V+j,}94+');
define('SECURE_AUTH_KEY',  '|/peBN8;YUnVZD9RTAW~|V,*|fSSbUhu`hA4B;<)v;,]t5[n zcEvOMke#vMR0 <');
define('LOGGED_IN_KEY',    'zA<]eNrj!IbsAm@68m-.)|c*_/gt]Zjasq0h}.EZhn`$fd`^eO[w-[Q%7[30k#u}');
define('NONCE_KEY',        'z,VpU-YSw150QW3WH?}}]+!GBq5AF$#|X-WpsU/DWASoTaA+|.}iXws8v`bGA;R>');
define('AUTH_SALT',        '$79fQ.a!zP8uSES5azi4xMr{/1jpc$TotweemZE75rr7h~|sD.<bFv yKP9p)!Ij');
define('SECURE_AUTH_SALT', '[+7(>]v5+mk1c YD]p<KGWL*w?QI,fi|CI03*e%H8O@H9oMilVh6mvBn_tlEUK<o');
define('LOGGED_IN_SALT',   'dj1CEmUx/m|O>t@+A7`#+c=0enm0<*1c`{]*-j{r?=|hO8QJ&]Nrc#Ot*/^2{t 1');
define('NONCE_SALT',       'QHPfX)<{VO#M9`oA$p|(flyP5BT-3jKE9)crKNKZ!Oa:~1%BIU,++rFwuaog8+=4');

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
