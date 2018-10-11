<?php
namespace Yaurau\Controllers;

use Yaurau\Models\{SiteValues, View};

class SiteController {
    public static function getView()
    {
            $arrayName = [];
            $arrayValue = [];
            $array = [];
            for($i = 0; $i<count(SiteValues::addValues()); $i++){
                array_push($arrayName, SiteValues::addValues()[$i]['name']);
                array_push($arrayValue, SiteValues::addValues()[$i]['value']);
                $array = array_combine($arrayName, $arrayValue);
            }
            $path = 'index.html.twig';
            View::getView($path, $array);

    }
}




