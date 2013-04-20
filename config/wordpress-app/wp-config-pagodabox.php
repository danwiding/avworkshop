<?php

define('AUTO_DEFINE_MARKER','AUTO_DEFINE_');

define('DB_NAME', $_SERVER['DB1_NAME']);
define('DB_USER', $_SERVER['DB1_USER']);
define('DB_PASSWORD', $_SERVER['DB1_PASS']);
define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);

define('AUTH_KEY', $_SERVER['AUTH_KEY']);
define('SECURE_AUTH_KEY', $_SERVER['SECURE_AUTH_KEY']);
define('NONCE_KEY', $_SERVER['NONCE_KEY']);
define('AUTH_SALT', $_SERVER['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_SERVER['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $_SERVER['LOGGED_IN_SALT']);
define('NONCE_SALT', $_SERVER['NONCE_SALT']);

// turn on caching
define('WP_CACHE', true);

// used to determine environment from easily accessible constant

define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', false);

if ( !defined('VIA_ENVIRONMENT') ){
    if(strpos($_SERVER['APP_NAME'],'integration') !== false)
        define('VIA_ENVIRONMENT', 'integration');
    else
        define('VIA_ENVIRONMENT', 'test');
}

foreach ($_SERVER as $key => $value){
    if(strpos($key,AUTO_DEFINE_MARKER) !== false){
        $defineKey=substr($key,strlen(AUTO_DEFINE_MARKER));
        if(!defined($defineKey)){
            define($defineKey, $value);
        }
    }
}