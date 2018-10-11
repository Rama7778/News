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
    static $controller = 'Create';

    public static function runChoice()
    {
        if ($_GET['id'] == 'login') {
            return self::$controller = 'Admin';
        } elseif (Check::checkCreateConst() == true && Check::checkCreateTables() == true) {
            return self::$controller = 'Site';
        } elseif (Check::checkCreateConst() == true) {
            return self::$controller = 'CreateLogin';
        }
    }

    public static function runController()
    {
        self::runChoice();
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
//                }self::$controller = 'Site';
//        p
//            AdminController::viewAdminPanel();
//        }
//        elseif(Check::checkCreateDB() == true){ //Проверка наличия БД сайта
//            SiteController::viewSite();
//        }
//        else {
//            CreateController::viewCreatePanel();  //Create DB
//

//        }
//    }
//}