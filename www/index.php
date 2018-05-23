<?php
require_once __DIR__ . '/autoload.php';
use Yaurau\Controllers\SiteController;
use Yaurau\Controllers\AdminController;
use Yaurau\Models\Database;


if($_GET['id'] == 'login'){
    AdminController::viewAdminPanel();
} else {
    SiteController::viewSite();
}
Database::authorizationForm();
var_dump($_POST);
?>










