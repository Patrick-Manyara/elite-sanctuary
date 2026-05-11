<?php

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

define(
    'IS_ONLINE',
    !in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'])
);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? 'https://'
    : 'http://';

$http_host = $protocol . $_SERVER['HTTP_HOST'];

$php_self = explode(".", $_SERVER['PHP_SELF'])[0];

define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
define('MODEL_PATH', ROOT_PATH . 'model/');

define('creator_uri', "https://crimsonhawkltd.co.ke/");
define('cookie_domain', $_SERVER['HTTP_HOST']);

if (IS_ONLINE) {

    $http_model  = $http_host . "/model/update/create?action=";
    $http_delete = $http_host . "/model/delete/index?";

    define('admin_uri', $http_host . "/dashboard");
    define('admin_url', $http_host . "/dashboard/");

    define('landlord_uri', $http_host . "/landlord");
    define('landlord_url', $http_host . "/landlord/");

    define('tenant_uri', $http_host . "/tenant");
    define('tenant_url', $http_host . "/tenant/");

    define('model_url', $http_model);

    define('base_url', $http_host . "/");
    define('base_uri', $http_host);

    define('delete_url', $http_delete);

    define('TARGET_DIR', "/home/floraccn/sanctuaryrealtors.com/uploads/");

    define('file_url', $http_host . "/uploads/images/");
    define('logo_url', $http_host . "/img/logo.png");

} else {

    $http_model  = $http_host . "/sanctuary/model/update/create?action=";
    $http_delete = $http_host . "/sanctuary/model/delete/index?";

    define('admin_uri', $http_host . "/sanctuary/dashboard");
    define('admin_url', $http_host . "/sanctuary/dashboard/");

    define('tenant_uri', $http_host . "/sanctuary/tenant");
    define('tenant_url', $http_host . "/sanctuary/tenant/");

    define('model_url', $http_model);

    define('base_uri', $http_host . "/sanctuary/");
    define('base_url', $http_host . "/sanctuary");

    define('delete_url', $http_delete);

    define('TARGET_DIR', 'C:/xampp/htdocs/sanctuary/uploads/');
    define('LOG_DIR', 'C:/xampp/htdocs/sanctuary/log/');

    define('file_url', $http_host . "/sanctuary/uploads/images/");
    define('logo_url', $http_host . "/sanctuary/assets/img/logos/logo.png");
}