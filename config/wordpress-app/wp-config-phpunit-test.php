<?php
define('DB_NAME', 'test');

define( 'DOMAIN_CURRENT_SITE', 'localhost' );

define('WP_CACHE', false);

if ( !defined('VIA_ENVIRONMENT') )
	define('VIA_ENVIRONMENT', 'phpunit-test');

$_SERVER['HTTP_HOST'] = 'localhost';
