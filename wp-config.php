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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-internationalization' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'wcSutffRnQHTHBS5BgLKM5nggsDLLW61ZkQ5ToiqXC6aPPzbUTVwVmlkf084GFqT' );
define( 'SECURE_AUTH_KEY',  'pTFTNXTW5AInox3JhlVJRriIOlBz4lfOqEs6u8zRvR0g6krqfUXyBL0UZQN72Z4u' );
define( 'LOGGED_IN_KEY',    'IFj2W1mfOvF8dwY0R794i5CMlNvWb6ozrepOYVn9ZGQ6Q4yvIDi3REz9jKjWZjIM' );
define( 'NONCE_KEY',        '66EjSmvXFKo5AXoOlGr73s8xevYudfSMgMLzfByEudA4rkqP45XtXgl49w5ll50j' );
define( 'AUTH_SALT',        'Ps5qBtMd0RQ0c1CYd9oBxkFz7ROYGPnG40ywfz4C23zS3LOBDGnCZdoeTuhfVveo' );
define( 'SECURE_AUTH_SALT', 'zQvykA3sDYifN5P97Al73ceCYdDt0qSAQwlugwyzxQyHCcbmejOK1brpFst9vWjt' );
define( 'LOGGED_IN_SALT',   'vcZ7sznXs27U3rs3HtCOpjkMRnaqlenQ7OnxE8dg6OFWIeOQr29JvjCIT1oLcIHk' );
define( 'NONCE_SALT',       'Dxv5YsKJA1g0T8tGZOdKFFX6JnmSffSsQ1CGpl2GDVUCjQI3hQmzuCW0Ba292PqW' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
