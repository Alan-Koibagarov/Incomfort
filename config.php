<?php
// HTTP
define('HTTP_SERVER', 'http://incomfort.kz/');

// HTTPS
define('HTTPS_SERVER', 'http://incomfort.kz/');

// DIR
define('DIR_APPLICATION', '/var/www/vhosts/incomfort.kz/httpdocs/catalog/');
define('DIR_SYSTEM', '/var/www/vhosts/incomfort.kz/httpdocs/system/');
define('DIR_IMAGE', '/var/www/vhosts/incomfort.kz/httpdocs/image/');
define('DIR_STORAGE', '/var/www/vhosts/incomfort.kz/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'srv-db-plesk06.ps.kz:3306');
define('DB_USERNAME', 'incom_opencart');
define('DB_PASSWORD', 'lifescomfortable2018');
define('DB_DATABASE', 'incomfor_opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');