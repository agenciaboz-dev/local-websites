<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`so)qfftuz:d#3cRrs5|Z+DX8%rs}BP+k.<U`@bEo/.dP:/kY(pVc3*ojPferZ7Z' );
define( 'SECURE_AUTH_KEY',   'G4;Qi&Q%(M0dJaxb4LW9tzB.t#r{l]>WG=5-YF,U3a%n+{KkdyT?P}%Pyl-z6EA9' );
define( 'LOGGED_IN_KEY',     'U2d0lkv7/1R#q>^a8v/GOI7^PR[fasgT9<CCCI<}Lf0G}6z$~n?hwDzpZf>#Q{9r' );
define( 'NONCE_KEY',         'SN-(b_Lfu[wHjl!uzeh$qrkYirucUmO3%F`Lt-u1OS%b<ePSD^FC^Y60!d EE6P9' );
define( 'AUTH_SALT',         'Nyd&S@2VAfU?gd0//]`n}aJ#uc5)5Q68NiR!,vP!thTj7<u7t_42za?> T63edqB' );
define( 'SECURE_AUTH_SALT',  '22$)P0ViJLzy3P*RVcL!B%8901WDDqOTeIQ:zyJaG[`*c_yK$.]k;WK#Plz[|jvo' );
define( 'LOGGED_IN_SALT',    'PnA>e6M7[isZ1Sklf6.z&.iIig6,g~gmfi0yNj_:;+$FZSJ0j=9]a~h/J0C5y67u' );
define( 'NONCE_SALT',        'Cb:SKb_gSZ8c-c R!s qOwOCVe@r-lfNbe{bgg16vq<ZlbXN9m1,:>bddu:.B9+p' );
define( 'WP_CACHE_KEY_SALT', '5h3NF)$Ftg-jzP}Asz|[WB]?d*sBzkR#t3Ki^@:kMZ8~;Go#Tt*X4=R38wfH~l+B' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
define( 'SCRIPT_DEBUG', false );

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
