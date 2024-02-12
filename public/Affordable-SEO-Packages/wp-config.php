<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'quantum_seo');

/** MySQL database username */
define('DB_USER', 'quantum_seo');

/** MySQL database password */
define('DB_PASSWORD', 'quantum_seo');

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
define('AUTH_KEY',         'R6N2aVavzTIUL4XuaAPn5ohInjfyKDfhLsMy99ua1qclCdixvhPb1rRsuLnhpCnM');
define('SECURE_AUTH_KEY',  'iLxWQF3iGO5hyBMgQMG6KM5P0HcSadLqRsU4UPEoGYX3XpxLXMQ2x76T4xqdFXmn');
define('LOGGED_IN_KEY',    'EfcXOi8shUgV7f8tQgHSSttzbE7oy9MgII7akYN0x3WaLSpjC3ZggYmYRxTZNuEX');
define('NONCE_KEY',        'TZTdNj8HyaKoRyXY86CBAli5LftmPmCOK8a5mRCwtyGGLYQLC8gBvOmYsspbY9OS');
define('AUTH_SALT',        'KImrAielsASSRzwjLNSr1lWLHgectBvLwHZVgrMMYiDBo6G07w36x3ZhaLtutsi0');
define('SECURE_AUTH_SALT', 'FFRD3E6GwHRnnd4O15yo2qZlOwyR4xjsNdSW1XuR7eVXR7YkuORsbW5C35fnYVEc');
define('LOGGED_IN_SALT',   'VPKSEngWe120US0SekQwIZu8OdTfON5Kcs3HXI5YFflePK6nVw9JQhAOW7S8d9Ca');
define('NONCE_SALT',       'OfWiDMfqZWmsdCAJj4yeLoAz5o3NNqfqwKN6dnMc7mItkohcmNgW01w9MyUKwSUq');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
