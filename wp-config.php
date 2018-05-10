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
define('AUTH_KEY',         'YLzHwQLWcUKpARSG3Iu/C8NeS6wc6ToCybKSRVKQtCLxrwzHq9RgwPh/yjVIMmH7AmSBzri4/kWa1UEHKeCpBg==');
define('SECURE_AUTH_KEY',  'Uj/zV9Yt15xWFLDwVxOsJNOWvyD5g0EMbOlRe2YPjVReLWf3duNfLu3HHhhhLDx7ibuYd5b2kC50YWpg27LCgw==');
define('LOGGED_IN_KEY',    '7iyv1lPEbtzl1zJ/5CEvSGj9IneLcog3R10CPJ2okGHKGLQuLaY4zVCROG2oFd8wVhf05NdRjq+8RS2p+eqjAg==');
define('NONCE_KEY',        'HcXT12LNxXW6o1ylzsIP8zJjmrWkPi+d9bd5UrRB1ypUrar1VDETVkDbK5582iYNsiTgdGQCiZSzvFfuXLsaKQ==');
define('AUTH_SALT',        'wudN6z/wQPnTPudFunzwlXO+R4JqeYhCXEzWitsuv/zDHx1kjq7iJx8T84IuwXcZyTv+wWOG7fE89AyxFt7CCw==');
define('SECURE_AUTH_SALT', 'lcjurgbFktFYDZj9KR5ALKXj+946eZMDd0wWGqkyH2VBT97rGfOLGDKU1+d+5eerBQb6LWweP/wQNo3RoJFxeg==');
define('LOGGED_IN_SALT',   'UZgDlvhiVPOMjzT++OWotTGwBw3AsRRlguHt5UtYPjxZ9i0d+y8YuDdCOM/6QIspZ22Q9+LY2VaW0EvYOft7HA==');
define('NONCE_SALT',       'v9sL77T9t8/vE5+d+J6B8m8Rfd5zE5847zUgXIDxMh0hiK+0ucRRUrSIlOLIwC0cFmBxQNwK6hikPofg1ORvTQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
