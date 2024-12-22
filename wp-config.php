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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp01' );

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
define( 'AUTH_KEY',         '}KmqW@b>^<6cak6RS{90_LIf@x5W<!xCkx*YPfMl(T5ju)e<FiJ[FwXD&~%4s&a]' );
define( 'SECURE_AUTH_KEY',  '3pDB+::#L2W0`m@Bn#cd$Fzl6cQvi9hy,H~4lc.wG5-B[Hq,Eu)e;0`/yW32J2u@' );
define( 'LOGGED_IN_KEY',    '#OtR2qAzvh]4 LdJj%t/@UCS.4sE?Ka5^SdpK5m%x+t?LPqOi[.8YwkR[8LrNg>[' );
define( 'NONCE_KEY',        'y2#2y0`]Ik?FUa8LxZ:n31HwUqu#!E>R d[yWSt*Vi=:&D,yW3IyoTtf<`KYBD)j' );
define( 'AUTH_SALT',        'RMZ,ktfLvJf2i<VytF)2dtIW:#}(wRjwj9XIu9V^I2TgSU(y8PrU(Y:|}@vXnA<A' );
define( 'SECURE_AUTH_SALT', '`N5&!hxRta@D~?D-B!Ws$-/At%/DS=~AI.8 $4vI/sGm<InU/~uJy14b6Pm.Wt)f' );
define( 'LOGGED_IN_SALT',   'a(,yF950[[iH?K-w/e;F~pGV{(~/YcDq)DRF@wmzGvU$tYDNyXdbq4|&W<|}O^PE' );
define( 'NONCE_SALT',       'ncI7  G;LBz)?96([P@:#=S5mjn*}hTgg=^T}#fK7UpjC1!N=W#Lq07dD*=<w]3a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
