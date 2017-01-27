<?php

$table_prefix  = 'wp_';

define('DB_NAME', '${WORDPRESS_DB_NAME}');
define('DB_USER', '${WORDPRESS_DB_USERNAME}');
define('DB_PASSWORD', '${WORDPRESS_DB_PASSWORD}');
define('DB_HOST', '${WORDPRESS_DB_HOST}');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY', '${WORDPRESS_AUTH_KEY}');
define('SECURE_AUTH_KEY', '${WORDPRESS_SECURE_AUTH_KEY}');
define('LOGGED_IN_KEY', '${WORDPRESS_LOGGED_IN_KEY}');
define('NONCE_KEY', '${WORDPRESS_NONCE_KEY}');
define('AUTH_SALT', '${WORDPRESS_AUTH_SALT}');
define('SECURE_AUTH_SALT', '${WORDPRESS_SECURE_AUTH_SALT}');
define('LOGGED_IN_SALT', '${WORDPRESS_LOGGED_IN_SALT}');
define('NONCE_SALT', '${WORDPRESS_NONCE_SALT}');

define('WP_DEBUG', ${WORDPRESS_DEBUG});

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
  $_SERVER['HTTPS'] = 'on';
}

if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

if (file_exists(ABSPATH . 'wp-custom.php')) {
  require_once(ABSPATH . 'wp-custom.php');
}

require_once(ABSPATH . 'wp-settings.php');
