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

// ** MySQL settings ** //

if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local datatbase settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'kurtc024_universitydata' );
	define( 'DB_USER', 'kurtc024_1' );
	define( 'DB_PASSWORD', 'password' );
	define( 'DB_HOST', 'localhost' );
}



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
 define('AUTH_KEY',         ']/%g6p1`_OriW^!.||M8G|h+jjrfQ>h.w@iP-;YKzN7|]Nc)<<Z9#y11!g/]AznQ');
 define('SECURE_AUTH_KEY',  ']_L>8W8YEJHz1E=4!G$QC&/p^Qvz:M76`$qn.1xL}+_Y_E N^%9-lA]pMfIsL=a@');
 define('LOGGED_IN_KEY',    '+!|Uy7-5)|<=B}#z|? ^{2#jMNA.@z6@@48wqSc.;fua]R;nv$xafi}85`ix ?5g');
 define('NONCE_KEY',        'Z2~!T:jLPo-1b+`UfcjK@+4AsPev2,X;W~0`uK:U&mE|-?0&K4]ar-j$o{9W dX:');
 define('AUTH_SALT',        'U^`- eq<{KVG)O*v0I^MB@R!axKDiVh.3@8T{,TDMJM:`gkhcT8jy:@zm(W6%EAR');
 define('SECURE_AUTH_SALT', 'IPE8HCYg.o5;U-U7;%#x{DA!dhM#OtSt=(_ek0Te{lGF`~s_J|q_dh2d]Up]<]1q');
 define('LOGGED_IN_SALT',   'zh/G0,(DU`*&u<v.fX};(.~BmoBIw<rQ$[eBg^9.Fc|W]r(r(-I,*) GGe0*#eRa');
 define('NONCE_SALT',       '!^%qn?}i3PG+s=*%%49>fO1DFL#jGfOh>t;_|4Q$ku%lwbX/k)<;5/r771+72w7o');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
