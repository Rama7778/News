<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
    $twig = new Twig_Environment($loader, array(
            //'cache' => __DIR__ . '/cache/compilation_cache',
        ));
    echo $twig->render($path, $array);
