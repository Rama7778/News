<?php
    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../view/Site');
    $twig = new Twig_Environment($loader, array(
            //'cache' => __DIR__ . '/cache/compilation_cache',
        ));
    echo $twig->render($path, $array);
