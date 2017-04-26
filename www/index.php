<?php
//error_reporting(E_ALL);
$class = isset ($_GET ['class']) ? $_GET ['class'] : 'News'; //Определяем имя класса
$method = isset ($_GET ['method']) ? $_GET ['method'] : 'All'; //Определяем имя класса
$class2 = $class . 'Controller';
$method2 = $method . 'News';
require_once __DIR__ . '/autoload.php';
$controller = new $class2;
$controller->$method2();
?>










