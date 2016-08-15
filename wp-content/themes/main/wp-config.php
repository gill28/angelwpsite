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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'angeliz9_angelitagill');

/** MySQL database username */
define('DB_USER', 'angeliz9_site');

/** MySQL database password */
define('DB_PASSWORD', 'X^NQaa*HJf?+');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k$irl7L@,qKnYCna]{.yD0ECUSG.*[6.`W-^,]a&?QaAn#vh+(yuDrd~}IKbZ^u{');
define('SECURE_AUTH_KEY',  'V;{CnBWeoMug?SCwY5wQp[Yc>0{y7H@yB,USy<=a5tu$4_vluvwIX;KlsdXJS[HH');
define('LOGGED_IN_KEY',    'y[0j_$KfHI_>,3gRy[i]-.YNy5cFj2p|be8pN5DH%1Y6TZ.J<5p~Qz0ACt-juZd/');
define('NONCE_KEY',        'XlR`:hCgG>R+lM{Ah$T>QYO4o]ba-,eyPM(ubKbm34AyC5ut>5{T<U,)&iJ!2W8$');
define('AUTH_SALT',        'k1N]V:vlu=r3=C6`*h:f/&XV23Cp4/Y vNjM8/;jq8w;Q5 SczNT#1J+G11Yv0[,');
define('SECURE_AUTH_SALT', 'dz +pISF$X7?s&{{Gk;Ck^aF=^n%3,NB$@4~2C)}=DFd]T:SbAJyib~#!!Jq$|*n');
define('LOGGED_IN_SALT',   'es{H2?1(cS/:N=}GS?=^|w+P{u_0qFy5eXSwn>]JmzS)JR<%CsV3h,+v*UI82Npj');
define('NONCE_SALT',       '_(lRSV>=KE]O0~GSF<V`#x/Ctd,,tXiD(S&xCEvO#>t/v1?OW<Y<y:vXh;h%ZEA?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fspwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
