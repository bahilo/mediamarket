<?php

if(file_exists("../config.local.php")){
    include "../config.local.php";
}


// HTTP
define('HTTP_SERVER', 'http://localhost/'.$cust_app.'/admin/');
define('HTTP_CATALOG', 'http://localhost/'.$cust_app);

// HTTPS
define('HTTPS_SERVER', 'http://localhost/'.$cust_app.'/admin/');
define('HTTPS_CATALOG', 'http://localhost/'.$cust_app);

// DIR quoi
define('DIR_APPLICATION', $cust_root.'admin/');
define('DIR_SYSTEM', $cust_root.'system/');
define('DIR_LANGUAGE', $cust_root.'admin/language/');
define('DIR_TEMPLATE', $cust_root.'admin/view/template/');
define('DIR_CONFIG', $cust_root.'system/config/');
define('DIR_IMAGE', $cust_root.'image/');
define('DIR_STORAGE', $cust_root.'storage/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
define('DIR_CATALOG', $cust_root.'catalog/');


// define('DIR_APPLICATION', $cust_root.'/catalog/');
// define('DIR_SYSTEM', $cust_root.'/system/');
// define('DIR_LANGUAGE', $cust_root.'/catalog/language/');
// define('DIR_TEMPLATE', $cust_root.'/catalog/view/theme/');
// define('DIR_CONFIG', $cust_root.'/system/config/');
// define('DIR_IMAGE', $cust_root.'/image/');
//define('DIR_STORAGE', 'D:/wamp2/www/mediamarket3/storage/');
// define('DIR_CACHE', DIR_STORAGE . 'cache/');
// define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
// define('DIR_LOGS', DIR_STORAGE . 'logs/');
// define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
// define('DIR_SESSION', DIR_STORAGE . 'session/');
// define('DIR_UPLOAD', DIR_STORAGE . 'upload/');


// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'mediamarket');
define('DB_PASSWORD', 'qobd225!');
define('DB_DATABASE', 'mediamarket3');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');


define('OPENCART_SERVER', 'http://www.opencart.com/');
