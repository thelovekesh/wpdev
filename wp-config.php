<?php

$table_prefix = 'wp_';

$constants = array(
	'DB_NAME'                        => 'wordpress',
	'DB_USER'                        => 'wordpress',
	'DB_PASSWORD'                    => 'wordpress',
	'DB_HOST'                        => 'database:3306',
	'DB_CHARSET'                     => 'utf8',
	'DB_COLLATE'                     => '',

	'AUTH_KEY'                       => 'put your unique phrase here',
	'SECURE_AUTH_KEY'                => 'put your unique phrase here',
	'LOGGED_IN_KEY'                  => 'put your unique phrase here',
	'NONCE_KEY'                      => 'put your unique phrase here',
	'AUTH_SALT'                      => 'put your unique phrase here',
	'SECURE_AUTH_SALT'               => 'put your unique phrase here',
	'LOGGED_IN_SALT'                 => 'put your unique phrase here',
	'NONCE_SALT'                     => 'put your unique phrase here',

	'FORCE_SSL_ADMIN'                => true,
	'WP_DEBUG'                       => true,
	'SCRIPT_DEBUG'                   => true,
	'SAVEQUERIES'                    => true,
	'WP_DEBUG_LOG'                   => '/tmp/php-error.log',
	'WP_DISABLE_FATAL_ERROR_HANDLER' => true,
	'JETPACK_DEV_DEBUG'              => true,
	'WP_ENVIRONMENT_TYPE'            => 'development',

	'WP_HOME'                        => 'https://local.thelovekesh.com',
	'WP_SITEURL'                     => 'https://local.thelovekesh.com/wp',
	'WP_CONTENT_DIR'                 => __DIR__ . '/content',
	'WP_CONTENT_URL'                 => 'https://local.thelovekesh.com/content',
);

foreach ( $constants as $constant_name => $constant_value ) {
	if ( ! defined( $constant_name ) ) {
		define( $constant_name, $constant_value );
	}
}

unset( $constants, $constant_name, $constant_value );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

require_once ABSPATH . 'wp-settings.php';
