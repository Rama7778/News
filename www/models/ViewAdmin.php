<?php
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view/Site');
$twig = new Twig_Environment($loader);
echo $twig->render('login.html.twig', array(
    'name' => 'Yaurau Framework',
    'creater' => 'Yaurau Framework',
    'title' => 'Yaurau Framework',
    'what_we' => 'what we',
    'we_offer_our_customers' => 'we offer our customers',
    'Our' => 'Our',
    'service' => 'service',
    'Projects' => 'Projects',
));