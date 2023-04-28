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
define( 'DB_NAME', 'wp_site' );

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
define( 'AUTH_KEY',         '[%VY(f>x66cfc:vep.rn9^W]e*05sRlH~oSJ@a+RZlPp,%d_b,R[ubM@N-b@<$A(' );
define( 'SECURE_AUTH_KEY',  'pGZki[T{< ^_1J-9OdT$=6Wa8)iV2nL5Gc D7 U+#|}]K[a4o$PGu&cZCf&XBdjA' );
define( 'LOGGED_IN_KEY',    'wZUxKZBQ+R#BArVZ|qdHtf9hNA0MyP9r9P6{[o3qe#BR?~o5g2W!XA^2r?3}P.Pj' );
define( 'NONCE_KEY',        'xRVKCW([|&q-h<|1n!pVCnROp(!vMPK>I8Zi8@l6-y6I1}y`zV)#!#^uVypE+qov' );
define( 'AUTH_SALT',        'l%X^Aa]PppS[u8yRKg3JnN7!CmYl]M1~k$M6&V#tRNdpnc-gwdVx>.Oz~G~iF-nm' );
define( 'SECURE_AUTH_SALT', 'X?=&xwrpGqLN[t1Z*ymU8KG<G{F9Eo%?p7Yg.@4TUYJ~+,VizozUl@u/?t,HM]?@' );
define( 'LOGGED_IN_SALT',   'ZHz>jy?M^hQ#n~Y[u6CX(p(3PxG!xwkYp{s2%Km=],B=e@cdl|tQxs`U,kBm*B+Y' );
define( 'NONCE_SALT',       '0mHl69j5GBhuEH126H*SQ35$&Qm(J<F&cx=bs;;Cq^.(i%$)|brl8heHHN G%9^K' );

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
