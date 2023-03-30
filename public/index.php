<?php
session_start();
define('BASE_URL', '/');
require '../vendor/autoload.php';
// require_once '../mvc/bridge.php';

$myApp = new MVC\Core\App;