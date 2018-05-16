<?php
namespace Yaurau\Controllers;
class AdminController
{
    public static function viewAdminPanel()
    {
        if (isset($_SESSION['login'])) {
            include_once __DIR__ . '/../models/ViewAdmin.php';
        } else {
            include_once __DIR__ . '/../models/ViewLogin.php';
        }
    }
}



