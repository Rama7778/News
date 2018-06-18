<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\SiteController;
use Yaurau\Controllers\AdminController;
use Yaurau\Models\ValidateLogin;
use Yaurau\Controllers\CreateController;

 if(@ValidateLogin::validate() != NULL && $_GET['id'] == 'login') {
         AdminController::viewAdminPanel();
 } else {
         SiteController::viewSite();
 }
?>










