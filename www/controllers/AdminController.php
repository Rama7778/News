<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Controllers;
require_once __DIR__ .'/../autoload.php';
use Yaurau\Models\{
    Check, SiteValues, View, LogFiles
};

class AdminController
{
    public function getView()
    {
        $check = new Check();
        if ($check->authorizationForm()) {
            self::getAdminPanel();
        } else {

            $path = 'login.html.twig';
            $array = [
                'title' => 'Yaurau Framework',
            ];
            $mess = 'Attempted access: ' . $_SERVER['REMOTE_ADDR'].'(IP) - '.date(DATE_RFC822) . '///';
            LogFiles::putContents($mess);
            View::getView($path, $array);
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
        View::getView($path, $array);
    }
}



