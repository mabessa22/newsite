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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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


define('AUTH_KEY',         'y0m5CAu3TRAoeuz8PS+6EAwXK+y1Dti+1G4J3pNsrPLTDi3eSkSaddIhwqUkd7/bQOCf+6tPJZaRko7q5Aiiug==');
define('SECURE_AUTH_KEY',  'FSx4AETk26R2r0j+mB0uwtsQTbbljKUPPoXAJKJIZ2tvPgzEqNVmcqrDeNWT9nKxzGDz0qKVLB5410E3IUbyFA==');
define('LOGGED_IN_KEY',    'h/lqNS4uy/1FgNDkT77G3EjplAfcj5PIU+0/pa0/P87Hke+ZB9PNFQ4Z83JrZIEiT6td9XfQSYMgPrRgL1i6rg==');
define('NONCE_KEY',        'hqYvFUsg/HCJ0tf2fZfpnU3FEYb6W625R4KtEswkKa4fBmUPN/HNy3g3amr0qVc+iqemweguXd18QjhHs1R+5g==');
define('AUTH_SALT',        'In8tbL90UEe/SJPiCCe0aU28qGmIMt/SIdIDy0nX/ZSnlu6/95Aq7/PqG2dreLG7tUfyabA6Zdbfi0OTA48XdA==');
define('SECURE_AUTH_SALT', 'FdlvMEWXJwfJxB+r9HEWhgJnXaLgPTofRjNRCaaAnEEp+CQyJJzPwbnHBcrAFc0wIRTsUc1svPX8Hj5MEHA6qg==');
define('LOGGED_IN_SALT',   'PRIfPGwJ+DR96p8k1zOz1NZVVQ8mYmuEdDqcCBQjV9U3mGc32n1fYqQLp65C4daU3Vkp5tciqUYuZkjMjYJdjg==');
define('NONCE_SALT',       'lpCkp3MR+hlDGh0Tur+x018iWan0DMQ670+0FkasqEYDsaKIsvFsXKoOywIssQQhQLM7K847mD4yENszy5awvw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
