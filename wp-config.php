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
define('FS_METHOD','direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rohan' );

/** Database username */
define( 'DB_USER', 'Rohan' );

/** Database password */
define( 'DB_PASSWORD', '20SruDsjAlcwauBj' );

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
define( 'AUTH_KEY',         'FzbVT%+<hH7y4!ZJP$w~v-C{CY6W|f<L1K6=Ss}[rRt>uNP!S1waM3B2rUf]|1#M' );
define( 'SECURE_AUTH_KEY',  'hvJI7</=P,_lEN5czUTrfIz~,!SDUJ#_aZQ_&5cP[r>PO|Ax VdzU(ED-Z<xGV,P' );
define( 'LOGGED_IN_KEY',    '21N0E-{oQwQZq{ X+.V;xzgbhLGb>j2h*Z-Ah3i|56XA::$3RI>FX`$ccb%b:wp&' );
define( 'NONCE_KEY',        'qJ9v>Q&W*p`htpI57^x0~G&6||S`8-J?{.q>xlqd{&Ar!Fuf~XVvRz$Vmq4^Nefj' );
define( 'AUTH_SALT',        'dN={/BC>&7=%7H[#O@<L- )3,lRX:^$A:2CCXMN W^a~:?MT?aeEsJvN;(/?EakQ' );
define( 'SECURE_AUTH_SALT', '|}>1Y5Z9Qq-<Aa)0QxtJe%D5$#wNg3oTJ]^?eo|pLI-rYrf5Cl JoJe6Vdu2>gw*' );
define( 'LOGGED_IN_SALT',   'HA/!@N{9!!9bs?8XdVt|3_e6)p2?T%M|ipc(CKrGIxVRL&#]^J#Rw~)5v#R,370^' );
define( 'NONCE_SALT',       '`v6?<#[5~~`G+bR30jO#,Ws6r-wHK~oq7ObBzuntszc} ^WTZ{9KV7CxnQh0l$0E' );

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
