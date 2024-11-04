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
define( 'DB_NAME', 'affinity_stage_v2' );

/** Database username */
define( 'DB_USER', 'affinity_stage_v2' );

/** Database password */
define( 'DB_PASSWORD', 'R2&gcvJRyn{%' );

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
define( 'AUTH_KEY',         'N`9AsCy :sp+4PW}ICW~ifJ%p.q$SKV_r#2]IP*W>S#X;  ycPy2YeZ*4vlme:d_' );
define( 'SECURE_AUTH_KEY',  ')ne*@T&#%=;CF}1MW^%Tb oG-rATwLI&)D#XQl-*I/0$Ub5low+y=N)h9!oiq72+' );
define( 'LOGGED_IN_KEY',    'wtl**5gQOC*#l,-}Cc9KC OF!5eod2|}H~rpA/Iugu8xJ+T| gig!>Y@.)3xt+*6' );
define( 'NONCE_KEY',        'r6utF:PCSP=Mt9!y/}q_R5$81xX]uej(&-t?hmW(R|43~aXTDKE!O2l4[-$)3KX6' );
define( 'AUTH_SALT',        'we;Z,nP5X>Kp[;K%gCU%{W3c0u=NZ;i$@5BVrPDl|jyzmMnEUt:7O.AY%pKh]E5G' );
define( 'SECURE_AUTH_SALT', 'TzRipqH0jz]w`8Iz{{ok<Ss@W9%C(V|c*~8 $B.~@$bz<T@3$ e^3N!#|rh<{7Zs' );
define( 'LOGGED_IN_SALT',   '|&AEkt*.!`k-ccGdp0Om>9.yIg! (pawJ;*97TH0_gM(H2X@Qa9$y7(m_iq/lYRq' );
define( 'NONCE_SALT',       'D6c#CZYD&2Bq&/RO[TOUfE-[@X>I;X5zMg*i%IDWvQUPbicKs[zM9D]!vZkvj4 H' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
