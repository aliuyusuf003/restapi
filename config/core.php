<?php

// define('__ROOT__', dirname(dirname(__FILE__)));


// show error reporting
error_reporting(E_ALL);

// set your default time-zone
date_default_timezone_set('Africa/Lagos');

// variables used for jwt
$key = "yusuf_key";
$issued_at = time();
$expiration_time = $issued_at + (60 * 10); // valid for 1 hour
$issuer = "http://localhost/restapi/RestApiAuthLevel1/";
?>