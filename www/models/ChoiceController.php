<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

require_once __DIR__ . '/../autoload.php';

use Yaurau\Controllers\{
    CreateControllerLogin, SiteController, AdminController, CreateController
};
use Yaurau\Models\Check;

class ChoiceController
{
    /**
     * @var string
     */
    static $controller = 'Create';

    public static function runChoice()
    {
        if ($_GET['id'] == 'login') {
            return self::$controller = 'Admin';
        } elseif (Check::checkCreateConst() == true && Check::checkCreateTables() == true) {
            return self::$controller = 'Site';
        }
    }

    public static function runController($controller = 0)
    {
        self::runChoice();
        if($controller !== 0){
            self::$controller = $controller;
        }
        $cont = self::getController(self::$controller);
        $cont->getView();
    }

    public static function getController($value)
    {
        if ($value == 'Admin') {
            return new AdminController;
        } elseif ($value == 'Site') {
            return new SiteController;
        } elseif ($value == 'Create') {
            return new CreateController;
        } elseif ($value == 'CreateLogin') {
            return new CreateControllerLogin;
        }
    }
}
