<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\{SiteController, AdminController, CreateController};
use Yaurau\Models\{Table, Validate, Check};

if($_GET['id'] == 'login') {
    AdminController::viewAdminPanel();
 } elseif(Validate::checkLogin() == true){
     SiteController::viewSite();
 } elseif (Table::create() == true) {
     AdminController::getAdminPanel();
 } else {
     CreateController::viewCreatePanel();
     Check::setForm();
 }
?>










