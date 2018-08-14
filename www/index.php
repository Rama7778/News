<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\{SiteController, AdminController, CreateController};
use Yaurau\Models\{ Check};

if($_GET['id'] == 'login') {
    AdminController::viewAdminPanel();
 } elseif(Check::checkLogin() == true){
     SiteController::viewSite();
 } elseif (Check::setForm() == true) {
     AdminController::getAdminPanel();
 } else {
     CreateController::viewCreatePanel();
     Check::setForm();
 }
?>










