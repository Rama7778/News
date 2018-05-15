<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.05.2018
 * Time: 22:09
 */

namespace Yarau\Models\ValidateLogin;


use Yaurau\Controllers\AdminController;

class ValidateLogin
{
    public function validate()
    {
        if($_POST['login'] == $a['login']){
            AdminController::viewAdminPanel();
        }
        else {
            AdminController::viewLogin();
        }


    }
}