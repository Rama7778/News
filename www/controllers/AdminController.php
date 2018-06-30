<?php
namespace Yaurau\Controllers;
require_once __DIR__ .'/../autoload.php';
use Yaurau\Models\{
    Check, SiteValues, Database
};

class AdminController
{
    public static function viewAdminPanel()
    {
        $check = new Check();
        if ($check->authorizationForm()) {
            self::getAdminPanel();
        } else {
            $path = 'login.html.twig';
            $array = [
                'name' => 'Yaurau Framework',
                'creater' => 'Yaurau Framework',
                'title' => 'Yaurau Framework',
                'what_we' => 'what we',
                'we_offer_our_customers' => 'we offer our customers',
                'Our' => 'Our',
                'service' => 'service',
                'Projects' => 'Projects'
            ];
            include_once __DIR__ . '/../view/ViewSite.php';
        }

    }
    public static function getAdminPanel()
    {
        $path = 'admin.html.twig';
        $arrayName = [];
        $arrayValue = [];
        $array = [];
        for($i = 0; $i<count(SiteValues::addValues()); $i++){
            array_push($arrayName, SiteValues::addValues()[$i]['name']);
            array_push($arrayValue, SiteValues::addValues()[$i]['value']);
            $array = array_combine($arrayName, $arrayValue);
        }
        include_once __DIR__ . '/../view/ViewSite.php';
    }
}



