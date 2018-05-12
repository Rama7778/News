<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\SiteController;
use Yaurau\Controllers\AdminController;

if($_GET['id'] == 'admin'){
 AdminController::viewAdminPanel();
}
else{
    SiteController::viewSite();
}
?>










