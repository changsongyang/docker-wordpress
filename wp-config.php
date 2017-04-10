<?php

//detect https proxy
if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

//move wp-content to wp directory to make mountable
define('WP_SITE_URI', ($_SERVER["HTTPS"]?"https://":"http://").$_SERVER["HTTP_HOST"]);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp/wp-content' );
define('WP_CONTENT_URL', WP_SITE_URI . '/wp/wp-content');
define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp/wp-content/plugins' );
define('WP_PLUGIN_URL',  WP_SITE_URI . '/wp/wp-content/plugins');
define('UPLOADS',  'wp/wp-content/uploads' );

//load custom config
define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . '/wp/wp-config.php');
