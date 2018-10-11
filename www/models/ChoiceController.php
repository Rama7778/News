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
    public static function runChoice(){
        if($_GET['id'] == 'login') {
            AdminController::viewAdminPanel();
        }
        elseif(Check::checkCreateDB() == true){
            SiteController::viewSite();
        }
        elseif (Check::setForm() == true) {
            AdminController::getAdminPanel();
        }
        else {
            CreateController::viewCreatePanel();
            Check::setForm();
        }
    }
}