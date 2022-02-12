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
define( 'DB_NAME', 'siqbee_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' p v,Pz i-*^%uO.mSAAA7Og%c320!C>wH0XSI0o%En26RK}/cPtVm@4-wu#/ko0' );
define( 'SECURE_AUTH_KEY',  'YZ>!kSP-J cV{#[59zfqD&ov-n=v8||#udOR1IF-f)2FjX53gEP&__vMj3 R((uQ' );
define( 'LOGGED_IN_KEY',    '<x?S.NW+9jxEm1_k0dNfbx,nlEeE|MA{^Es]s8XZ!O3}ZgH=q*&_n$)rIkgt&OVk' );
define( 'NONCE_KEY',        'RFm*fAl.1y/P-<LjqKKcb`IsG`+YrV.bqB.!+&DOC-OM0zIHOE8G~B]2/#fusFm_' );
define( 'AUTH_SALT',        ',$:YYeX6M@-PM:lMRIf$}IsFw/m$F:aq|h%M=*xRD_0ag<w^tMYM%L.5uQRg;k_P' );
define( 'SECURE_AUTH_SALT', 'Ya-Skglb|:XZM%b-!V3K(l qv<FNcF(Jhas8:g]tk<%)wp:,.~1RdDzPT6:;+3[n' );
define( 'LOGGED_IN_SALT',   'Xp|E%)eEZ2ocn_TVr+wjL;3sI;Hga3tZ:>#BE aJ:{6wYf_U/<i_nYwv}_,w3u1{' );
define( 'NONCE_SALT',       'oyixG+4]/7pUZ<1RK&xL(&U<J(gew[XXF8)TkF.-E/&DXzt%T%;-76%icf</<`b ' );

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
