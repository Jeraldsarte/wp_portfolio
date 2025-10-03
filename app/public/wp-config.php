<?php
/**
 * WordPress configuration file for Docker/Render
 */

// ** Database settings **
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress' );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'root' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: '' );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts. **
// You can generate fresh ones at: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         getenv('AUTH_KEY') ?: 'put-your-unique-phrase-here');
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') ?: 'put-your-unique-phrase-here');
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY') ?: 'put-your-unique-phrase-here');
define('NONCE_KEY',        getenv('NONCE_KEY') ?: 'put-your-unique-phrase-here');
define('AUTH_SALT',        getenv('AUTH_SALT') ?: 'put-your-unique-phrase-here');
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: 'put-your-unique-phrase-here');
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT') ?: 'put-your-unique-phrase-here');
define('NONCE_SALT',       getenv('NONCE_SALT') ?: 'put-your-unique-phrase-here');

// ** WordPress Database Table prefix. **
$table_prefix = getenv('TABLE_PREFIX') ?: 'wp_';

// ** Debugging mode **
define( 'WP_DEBUG', getenv('WP_DEBUG') === 'true' );

// ** Absolute path to the WordPress directory. **
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// Sets up WordPress vars and included files.
require_once ABSPATH . 'wp-settings.php';
