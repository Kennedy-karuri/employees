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
define( 'DB_NAME', 'employees' );

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
define( 'AUTH_KEY',         'T^%~][]0|f@7re5nqnE- +vmq<D~bT(L>FH;H%S;3VA@eCRd#M&Z)jS][ADH+y7W' );
define( 'SECURE_AUTH_KEY',  'I9Uc/e@<v`ZP5&+Fd5y)i^lBmWyS`0n=yi5&I4nOBgjL-k}VC[2Nl0KU6w);($/N' );
define( 'LOGGED_IN_KEY',    'QDU@<`/*#O<=.qRA@_sBgL^ql3(SaP@b61mCFF#aYi60Y>2AGXk Zl1:R(dG0J7!' );
define( 'NONCE_KEY',        '#P#pFEA`OapOB_=fkjxea[hxUGEGa,B2~O]7P[?p?.N8$.Tovq0u!vp?QB5EFpXc' );
define( 'AUTH_SALT',        '&ikPq$ ybAum2n)f{cDJ:cM?]_M#$Kd<dlfSN8Rt1G=5_Qx1)nNSdf$(Ydn) <IH' );
define( 'SECURE_AUTH_SALT', 'zRWV]G~Vo2y$jL4)>xV^rI.?/xJcgdM2IVTN~9+)|w;~Jm%!bIGunTTFhIRHCmIt' );
define( 'LOGGED_IN_SALT',   'iK_Jt%_yL<AcE3C_ ,LWdg_[,GL8Tw#aR$+.L,hG9d:GBf.*9AQH>WI^SQCUfD`W' );
define( 'NONCE_SALT',       'fe&iAGlwF}[+nX<yZ4j!8y/X4{d&=yQ*]__A!v0D}RBo6t6_c%!)OEu@NUsiLj),' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
