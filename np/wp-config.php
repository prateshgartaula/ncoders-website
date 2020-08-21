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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ncoderscom_wp224' );

/** MySQL database username */
define( 'DB_USER', 'ncoderscom_wp224' );

/** MySQL database password */
define( 'DB_PASSWORD', '7SL559-W!p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dwrgqioi128tiwtlyudugbpb9ygqicc9izobvietr24xtbjlzugwnttdboc0rrzw' );
define( 'SECURE_AUTH_KEY',  'jjo8qsgastwyivjgozmonjmlrjnwdggm6zhe4h8ougowb2pysgggqkagnpg7rolh' );
define( 'LOGGED_IN_KEY',    'koxo74zfu2tqomszhjef8ota98iowp2pxvp6dlllrmp0xtk6omigajmdps0jyoft' );
define( 'NONCE_KEY',        'jouxyfydmtwjssrqsrwllkifqgfbbzreglqqumvbtajflinq7gwvwfnroag5qikn' );
define( 'AUTH_SALT',        'jisearmb3km6nvprgr5atgjzalpvuxeb2pfaxhbreeeja7ijs0lerlddgmt76zzr' );
define( 'SECURE_AUTH_SALT', 'n0unk47ypf2hdmxjrudd0fgwayf0n9jbgpyootskvnraavyvmeue2tqxnv4qukml' );
define( 'LOGGED_IN_SALT',   'x2srwuginxayz7q9ufmq1ipyfx6jdwcjl5rec9va7c8ooy4akaskuxtf4whq16em' );
define( 'NONCE_SALT',       'la7kecid9bfmer3tvvbdrv77h2l9qyakp69axnmvfr2pbuhfpe8w3ypohhy9j8w2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqv_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
