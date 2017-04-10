<?php

//move wp-content to wp directory to make mountable
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp/wp-content');

define( 'WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp/wp-content/plugins' );
define( 'WP_PLUGIN_URL',  'http://' . $_SERVER['HTTP_HOST'] . '/wp/wp-content/plugins');

define( 'UPLOADS',  'wp/wp-content/uploads' );

define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . '/wp/wp-config.php');
