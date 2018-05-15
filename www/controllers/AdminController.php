<?php
namespace Yaurau\Controllers;
class AdminController {
    public static function viewAdminPanel(){
        include_once __DIR__  .'/../models/ViewAdmin.php';
    }
    public static function viewLogin(){
        include_once __DIR__  .'/../models/LoginAdmin.php';
    }
}

