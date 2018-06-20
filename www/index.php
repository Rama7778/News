<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\SiteController;
use Yaurau\Controllers\AdminController;
use Yaurau\Controllers\CreateController;
use Yaurau\Models\CreateTable;
use Yaurau\Models\ValidateLogin;

 if(@ValidateLogin::validate() && $_GET['id'] == 'login') {
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










