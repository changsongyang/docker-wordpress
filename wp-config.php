<?php
//move wp-content to wp directory to make mountable
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp/wp-content');
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/wp/wp-content/plugins' );
define( 'WP_PLUGIN_URL',  'http://' . $_SERVER['HTTP_HOST'] . '/wp/wp-content/plugins');
define( 'UPLOADS',  'wp-content/uploads' );
include( dirname(__FILE__) . '/wp/wp-config.php' );
