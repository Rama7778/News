<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\SiteController;
use Yaurau\Controllers\AdminController;
use Yaurau\Models\ValidateLogin;
use Yaurau\Controllers\CreateController;

 if(ValidateLogin::validate() != NULL) {
     if($_GET['id'] == 'login'){
         AdminController::viewAdminPanel();
     } else {
         SiteController::viewSite();
     }
 } else {
        CreateController::viewCreatePanel();
 }
?>










