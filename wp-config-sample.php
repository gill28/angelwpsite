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
define('DB_NAME', 'angelswebsite');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hvA:Pzv+00x=a3bqw(M33m-tJL+ wD87]175e%RUCbrxPZu*}p&uY@fM_sw/6(r5');
define('SECURE_AUTH_KEY',  '&=$H~%aVE>+s8MgRuR|,P%@aQ.sTot+Tk|Ox%~u#-kI_=JT.ZOiL%GJkc>+lAq-2');
define('LOGGED_IN_KEY',    '^O-ez<uO:B*y#{osn7/X4WV;*%*0|H7;#Qh#Yui?sAZm9M2L,H}-ILD/LYwlF2n-');
define('NONCE_KEY',        'RD4.R|*Hlk4Z#(361W#[I+j@wCDsh#E>#RX$7wq.4@SPI#c$&U>.^Ju4(H(.bn_G');
define('AUTH_SALT',        'nVN_[/A++7Jkl%`]#3%+X_gqXq-:L[ud&)Aq!5`A+!G~LG7sP>-c;3cNHL_tGSDX');
define('SECURE_AUTH_SALT', 'e8/i6}np{_BIbG+|%wgMdE)95]k+<;Cr&yq?gY{HzOC9fS0c[z#>+W_v/?~j)-I ');
define('LOGGED_IN_SALT',   'uy~Xa9-:KzQ~v=+CZ-Xz+w&}A+A|@XCl9..C{Vdd}|@E{?#2LZk8|dnAQ7%E`$fI');
define('NONCE_SALT',       'xS=QTj*!+D1VarZLQYo=;==yR+A*IKC4#wNp]Lm~P|]b4Q4-UlK?d:kWe-P+sZ;*');

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
