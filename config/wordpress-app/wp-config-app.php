<?php

//set timezone
date_default_timezone_set('America/Chicago');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

define('APP_NAME', 'AvWorkshop');
$table_prefix  = APP_NAME . "_";

//define('WP_ALLOW_MULTISITE', true);
//define( 'MULTISITE', true );
//define( 'SUBDOMAIN_INSTALL', true );
//$base = '/';
//define( 'PATH_CURRENT_SITE', '/' );
//define( 'SITE_ID_CURRENT_SITE', 1 );
//define( 'BLOG_ID_CURRENT_SITE', 1 );


define ('WP_PLUGIN_DIR', dirname(dirname(__DIR__)) . '/plugins');

//define( 'WPMU_PLUGIN_DIR', dirname(__DIR__) . '/plugins');