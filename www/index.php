<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\{SiteController, AdminController, CreateController};
use Yaurau\Models\{CreateTable, ValidateLogin};

 if($_GET['id'] == 'login') {
    AdminController::viewAdminPanel();
 } elseif(@ValidateLogin::validate()){
     SiteController::viewSite();
 } elseif (CreateTable::create() == true) {
     AdminController::getAdminPanel();
 } else {
     CreateController::viewCreatePanel();
     CreateTable::create();
 }
?>










