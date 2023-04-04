<?php
session_start();
define('BASE_URL', '/');
require '../vendor/autoload.php';

try {
    $PDO = (new MVC\Core\PDOFactory)->create([
    'dbhost' => 'localhost:3306',
    'dbname' => 'cf_shop',
    'dbuser' => 'root',
    'dbpass' => '123456' 
    ]);
} catch (Exception $ex) {
    echo 'Không thể kết nối đến MySQL, kiểm tra lại username/password đến MySQL.<br>';
    exit("<pre>${ex}</pre>");
}

$myApp = new MVC\Core\App($PDO);