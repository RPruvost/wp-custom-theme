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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_custom_theme' );

/** MySQL database username */
define( 'DB_USER', 'wp_theme' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'oKR; ;KFLI4/~HG7Iz)O ao;^:a7o{<;.N7}FMLd6= .TNnI,:+AgV]bv.)ZTt(a' );
define( 'SECURE_AUTH_KEY',   '.C/.RZfdl?Him4tDRUB9cJ0s0{:KKG*MvqFX[=.=MC@w!op/;k) >cA8F8sq/x*6' );
define( 'LOGGED_IN_KEY',     'El*i*,`Nh4inE..81oi{^gfG{~?AtoB(X>H3w7fjb|}O16T4I4u3;T+DLSx;RSJj' );
define( 'NONCE_KEY',         '+Z@-RyxOw[1qtOic@e4r30bV=Pa1x(6op!F)&`?F]jhYi@[?F~foA3%,en_SLW|.' );
define( 'AUTH_SALT',         'Cgi7Jm}n6m*Hzf{+Q8>Qn{k+{0fcWl?HrErt2%38StV#-D=QwQLcdEOdm,I]: 2z' );
define( 'SECURE_AUTH_SALT',  'u7)[yN4pdyYk3B3N]^|hBuG &6?(=}>|7b<<76E&H&2P,z~.%rpeQDNjt+=43Ygd' );
define( 'LOGGED_IN_SALT',    ')M VXkaN2MvoN<N7,;0ZRFm?(vtG)b>oQD;}d3EB:l&4qeG#WsHO9^,ub1akXr;Z' );
define( 'NONCE_SALT',        ' ,zb:-Wx@]H7k9iO_)2Z*;@w6F%9P=d3Rk?lp?uF`67Ni(T5&&iMF(fwa3Pf;(/+' );
define( 'WP_CACHE_KEY_SALT', 'q#Ra>$-q#FUpb.D+pjO4yO%b%QFIxvd4S6eOC[$<M]@YsSzr(4f(jW( jy#.F_ek' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
