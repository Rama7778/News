<?php
require_once __DIR__ .'/../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__ .'/public/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/cache/compilation_cache',
));
echo $twig->render('layout.html.twig', array(
    'name' => 'Yaurau Framework',
    'creater' => 'Yaurau Framework',
));
//error_reporting(E_ALL);
//use Application\Models\View;
/*require __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/autoload.php';
//PHP_Timer::start();
$class = isset ($_GET ['class']) ? $_GET ['class'] : 'News'; //Определяем имя класса
$method = isset ($_GET ['method']) ? $_GET ['method'] : 'All'; //Определяем имя класса
$class2 = 'Application\\Controllers\\' . $class;
$method2 = $method . 'News';

try {

$controller = new $class2;
$controller->$method2();
}
catch (Exception $e) {
    $view = new View();
    //$view->error = $e->getMessage();
    //die('Такая новость уже есть' . $e->getMessage());
    $view->display('error404.php');

}


// ...

$time = PHP_Timer::stop();
//var_dump($time);

print PHP_Timer::secondsToTimeString($time);
print PHP_Timer::resourceUsage();*/
?>










