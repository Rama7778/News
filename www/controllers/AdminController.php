<?php
namespace Yaurau\Controllers;
require_once __DIR__ .'/../autoload.php';
use Yaurau\Models\Database;

class AdminController
{
    public static function viewAdminPanel()
    {
        if (Database::authorizationForm()) {
            include_once __DIR__ . '/../models/ViewAdmin.php';
        } else {
            include_once __DIR__ . '/../models/ViewLogin.php';
        }
    }
}



