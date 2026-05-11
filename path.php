<?php
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

$enLigne = false; // Set this to true for online, false for offline

if ($enLigne) {

    $http_host  = "https://$_SERVER[HTTP_HOST]";
    $php_self   = explode(".", $_SERVER['PHP_SELF'])[0];
    $http_model = "https://$_SERVER[HTTP_HOST]/model/update/create?action=";
    $http_delete = "https://$_SERVER[HTTP_HOST]/model/delete/index?";

    define('admin_uri', $http_host . "/dashboard");
    define('admin_url', $http_host . "/dashboard/");

    define('landlord_uri', $http_host . "/landlord");
    define('landlord_url', $http_host . "/landlord/");


    define('tenant_uri', $http_host . "/tenant");
    define('tenant_url', $http_host . "/tenant/");

    define('model_url', $http_model);

    define('base_url', $http_host . "/");
    define('base_uri', $http_host);

    define('creator_uri', "https://vesencomputing.com/");
    define('delete_url', "$http_delete");


    define('cookie_domain', "$_SERVER[HTTP_HOST]");

    define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
    define('MODEL_PATH', realpath(dirname(__FILE__)) . '/model/');

    define('TARGET_DIR', "/home/crimsonh/sanctuarytest.crimsonhawkltd.co.ke/uploads/");
    // define('LOG_DIR', $http_host . "/log/");


    define('file_url', 'https://sanctuarytest.crimsonhawkltd.co.ke/uploads/images/');
    define('logo_url', $http_host . "/img/logo.png");
} else {
    // LOCAL
    $http_host  = "https://$_SERVER[HTTP_HOST]";
    $php_self   = explode(".", $_SERVER['PHP_SELF'])[0];
    $http_model = "https://$_SERVER[HTTP_HOST]/sanctuary/model/update/create?action=";
    $http_delete = "https://$_SERVER[HTTP_HOST]/sanctuary/model/delete/index?";

    define('admin_uri', $http_host . "/sanctuary/dashboard");
    define('admin_url', $http_host . "/sanctuary/dashboard/");
    define('tenant_uri', $http_host . "/sanctuary/tenant");
    define('tenant_url', $http_host . "/sanctuary/tenant/");
    define('model_url', $http_model);
    define('base_uri', "https://localhost/sanctuary/");
    define('base_url', "https://localhost/sanctuary");

    define('creator_uri', "https://vesencomputing.com/");
    define('delete_url', "$http_delete");

    define('cookie_domain', "$_SERVER[HTTP_HOST]");

    define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
    define('MODEL_PATH', realpath(dirname(__FILE__)) . '/model/');

    define('TARGET_DIR', 'C:/xampp/htdocs/sanctuary/uploads/');
    define('LOG_DIR', 'C:/xampp/htdocs/sanctuary/log/');


    define('file_url', "$http_host/sanctuary/uploads/images/");
    define('logo_url', $http_host . "/sanctuary/assets/img/logos/logo.png");
}
