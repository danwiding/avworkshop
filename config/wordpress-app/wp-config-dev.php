<?php


define( 'DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST'] );
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);


// used to determine environment from easily accessible constant
if ( !defined('VIA_ENVIRONMENT') )
	define('VIA_ENVIRONMENT', 'dev');
