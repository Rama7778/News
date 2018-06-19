<?php
namespace Yaurau\Controllers;
use Yaurau\Models\SiteValues;
use Yaurau\Models\ValidateLogin;
class SiteController {
    public static function viewSite()
    {
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
        }

    public static function viewForm()
    {
        if (isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_password'])) {
            ValidateLogin::createTable();
            SiteValues::baseValues();
            header('Location:/');
        }
    }
}




