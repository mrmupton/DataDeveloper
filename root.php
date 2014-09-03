<?php
/*
 * Define PATH for root path
 */
define('PATH',(__URL__),true);
/*
 * Define URL for base url
 */
$h = "http://";
if(isset($_SERVER['HTTPS'])) $h = "https://";
define('URL', $h . $_SERVER['SERVER_NAME'] . '/',true);
/*
 * include composer autoloader
 */
include_once 'vendor/composer/autoload.php';