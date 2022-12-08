<?php
header('Content-type: text/html; charset=utf8');

spl_autoload_register(function ($class_name) {
    include "system/libs/".$class_name . '.php';
});
include_once 'app/config/config.php';

$boot = new Bootstrap();






?>