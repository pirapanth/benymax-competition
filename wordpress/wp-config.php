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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7bo:46=Qi${&#I:pOv[6KA[v9*Gz:;>#3Ua,bo#mk<7X{NKu&orcK/`N^$fZ@j%a' );
define( 'SECURE_AUTH_KEY',  'rbF9CZ4.l?Xe)</,r+o{7Ze+;z`u%?YOj{NU}P3n,t1l|pmj?3OUS0oX=*Uht:%Y' );
define( 'LOGGED_IN_KEY',    '#?ZvG F7g$G/S.V*@n11sNX&7s>moq_N@LJ.f0Kq=jS`k:O0Ne#IcaIh4?~~?U:a' );
define( 'NONCE_KEY',        'VP{;EB?$E(1]jOI%{B~$csB1I)y@kA6}sx0 w^N^&L l6_*0,k~p[mU~Au+Kv7)3' );
define( 'AUTH_SALT',        '4C_#67HUk&D4nPWA3n+Qg3l66Zc}-DhqW:G?;f%G&C-<5R<{,t,@m.%^E{pjXR_+' );
define( 'SECURE_AUTH_SALT', '_8A3&iBm#[%1ivFzzrzE3/Ee@BWHK$4`Fu*.#I&{y}bV:;6>yAH{1@}faq)oYt[`' );
define( 'LOGGED_IN_SALT',   'kLs]~<Mwx/v jEB@[?x>,u`:8/Msrpec`;6-TjxLrWnMo<7=ZxI_-QqfBi[@Zj4]' );
define( 'NONCE_SALT',       'xm5 EH(9l~FMzyXMjyB3d2=5uVmMt=x*b4* <|Gi4bBN^_2M%Otj*GgYS:~#9GsZ' );

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
