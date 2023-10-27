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
define( 'DB_NAME', 'wordpress_terbaru' );

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
define( 'AUTH_KEY',         ',1v!o5?F_;alaD%{qioq.h%tY8PCLkja 8<P~8Z+L{t|QG2#k9 `ae 4d&pfPawE' );
define( 'SECURE_AUTH_KEY',  '7w3|u|ri_{xHyPoH!1q)E>@^T|>LL+$Wj^6J,mL|qeB0+KV2[*7bd(*HMWc)w70@' );
define( 'LOGGED_IN_KEY',    '!X[WBUtp;fr+xt2ca7hI7}8sB=jE)_)T?2bL}wTD>,n^ jieD#!ytEp>t)n =qmm' );
define( 'NONCE_KEY',        'G`nA`cM]>OOG[Svr3sq(UzkLwuow]RV4A12?}.Ks}#X9c=)?*gv[NRuO2uPOn:a9' );
define( 'AUTH_SALT',        '=PNvIl0_y;[|H^D+?@ f>BFdNBroD2uz&0gK5m,:pRAIpqZ?LHBiq{;?ZhtEwXL+' );
define( 'SECURE_AUTH_SALT', 'HC3N}<7XQFMn=Q!i[tWj-r6Hsgd. _r$1$NeqMb)TQjxb4*O]PesR|)7A2}4x,OT' );
define( 'LOGGED_IN_SALT',   'Z_O$WAY0j:s8QCZty{}Z80{j;nSwK4M<IXj6n5(Lt>_QD2?Xi/;3C|:/63hh$*[@' );
define( 'NONCE_SALT',       'cr7,}tTi3/dm+g/*JGF7vI`}cIcib!k1 .R}6:Te.|@5!.p5qM<QK:rP kXS_NB!' );

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
