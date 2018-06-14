<?php
namespace Yaurau\Controllers;
use Yaurau\Models\Database;
use Yaurau\Models\SiteValues;
use Yaurau\Models\ValidateLogin;
class SiteController {
    public static function viewSite()
    {
        if(ValidateLogin::validate() != NULL){
            $arrayName = [];
            $arrayValue = [];
            $array = [];
            for($i = 0; $i<count(SiteValues::addValues()); $i++){
                array_push($arrayName, SiteValues::addValues()[$i]['name']);
                array_push($arrayValue, SiteValues::addValues()[$i]['value']);
                $array = array_combine($arrayName, $arrayValue);
            }
            $path = 'layout.html.twig';
            include_once __DIR__ . '/../view/ViewSite.php';
        } else {
            $path = 'create.html.twig';
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
            if(isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_email'])) {
                ValidateLogin::createTable();
            }
            include_once __DIR__ . '/../view/ViewSite.php';
        }
    }
}




