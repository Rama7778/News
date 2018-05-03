<?php
require_once __DIR__ .'/../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__ . '/view/Site');
$twig = new Twig_Environment($loader, array(
    //'cache' => __DIR__ . '/cache/compilation_cache',
));
echo $twig->render('layout.html.twig', array(
    'name' => 'Yaurau Framework',
    'creater' => 'Yaurau Framework',
));
?>










