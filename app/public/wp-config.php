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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'HWzWkdfSEgH/1XWIbDPihlbIOQQ2lU1v3CpGQ+vfUMamS5zYbp9+nfmW7gNwIXeiwK7esN5rsiMHILu+0NCIVQ==');
define('SECURE_AUTH_KEY',  'uMsGsWjgptvHdJmYHfXy59WXCvgCiQ3Gra/A2NLp+qPzb+T2zITJBD1fLLFLXRnR7Ho6HP9TEU2EYNoMLSoEqg==');
define('LOGGED_IN_KEY',    'SCsoxgrrjKf+AFVfFfSY7cHzauBFM7xJbb3uSc0Xf9fYIhhYFHSQFa5VdbItqH/isFzTXWLuhUG9iwjPPur+kg==');
define('NONCE_KEY',        '5+EPfn27xl7dheXYhFaeK7NhoVC2X/dLNakzFsjwCfNjh9lJLBJ54Rgxu50QPEK9F9kDydj8I1Cc8hKuZWkQgg==');
define('AUTH_SALT',        'iMyHCQb8ImskF1B8UwMCKNe3ykhSA07N3WKZ+sVmmHkzpnjHbW7RiOlF3y2kyPVHVeuMiAbbN6vqJrEj/U03YQ==');
define('SECURE_AUTH_SALT', 'tMS4uQ8mk6/VEQu9njsMdFuI62joexu89fwInQYgb9OCb1pDs8IHpdbzaMsv29th8cC2PIpsCmqQke3ReA4dQg==');
define('LOGGED_IN_SALT',   'laxhflVpXYm4/Zw6UtLq0FSqEHSYyaDG0wAcUQHOLG+B9w+3wb5kAScVpoq/QxjHwyio8gnygWpyh18+w4ovrQ==');
define('NONCE_SALT',       'jPD3HyZMiM9b1hpIuQf8ZjES2+R2j1h2n9k7nqRZK0PxgaXvcsD1rVwSu3Lmy+pRV8ZXtBrlqIhDy157Z1Qd6Q==');

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
