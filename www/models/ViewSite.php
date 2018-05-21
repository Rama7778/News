<?php

    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../view/Site');
    $twig = new Twig_Environment($loader, array(
            //'cache' => __DIR__ . '/cache/compilation_cache',
        ));
    echo $twig->render('layout.html.twig', array(
        'name' => 'Yaurau Framework',
        'creater' => 'Yaurau Framework',
        'title' => 'Yaurau Framework',
        'what_we' => 'what we',
        'we_offer_our_customers' => 'we offer our customers',
        'our_service' => 'Our service',
        'we_offer_our_service' => 'we offer our service',
        'projects' => 'Projects',
        'title_banner_first_1' => 'title banner first',
        'title_banner_second_1' => 'title banner',
        'text_banner_second_1' => 'text banner',
        'title_banner_first_2' => 'title banner first',
        'title_banner_second_2' => 'title banner',
        'text_banner_second_2' => 'text banner',
        'title_banner_first_3' => 'title banner first',
        'title_banner_second_3' => 'title banner',
        'text_banner_second_3' => 'text banner',
        'icon_title_offer_1' => 'icon_title_offer_1',
        'icon_text_offer_1' => 'icon_text_offer_1',
        'icon_title_offer_2' => 'icon_title_offer_2',
        'icon_text_offer_2' => 'icon_text_offer_2',
        'icon_title_offer_3' => 'icon_title_offer_3',
        'icon_text_offer_3' => 'icon_text_offer_3',
        'icon_title_service_1' => 'icon_title_service_1',
        'icon_text_service_1' => 'icon_title_service_1',
        'icon_title_service_2' => 'icon_title_service_2',
        'icon_text_service_2' => 'icon_title_service_2',
        'icon_title_service_3' => 'icon_title_service_3',
        'icon_text_service_3' => 'icon_title_service_3',
        'icon_title_service_4' => 'icon_title_service_4',
        'icon_text_service_4' => 'icon_title_service_4',
        'mail' => 'mailto:info@example.com'
    ));
