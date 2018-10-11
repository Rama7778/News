<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.10.2018
 * Time: 11:40
 */

namespace Yaurau\Models;

require_once __DIR__ . '/../autoload.php';

use Yaurau\Controllers\{SiteController, AdminController, CreateController};
use Yaurau\Models\Check;

class ChoiceController
{
    static $controller = 'Site';

    public static function runChoice()
    {
        if ($_GET['id'] == 'login') {
            return self::$controller = 'Admin';
        } elseif (Check::checkCreateConst() == true && Check::checkCreateTables() == true) {
            return self::$controller = 'Site';
        } elseif (Check::checkCreateConst() == true) {
            return self::$controller = 'Create'; //Если есть config
        }                                           //Если есть таблица login
    }                                             //Если есть и конфиг и login

    public static function runController()
    {
        $cont = self::getController(self::runChoice());
        $cont->getView;
    }

    public static function getController($value)
    {
        if ($value == 'Admin') {
            return new AdminController();
        }
        if ($value == 'Site') {
            return new SiteController();
        }
        if ($value == 'Create') {
            return new CreateController();
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