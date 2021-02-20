<?php
include_once("vendor/autoload.php");

use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'server' => 'localhost',
    'database_name' => 'p03_db',
    'username' => 'p03_5dhn',
    'password' => 'hPA4iHX3CH'
]);
?>