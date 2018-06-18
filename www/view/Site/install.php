<?php

require_once __DIR__ . '/../../autoload.php';
use Yaurau\Controllers\CreateController;
use Yaurau\Models\ValidateLogin;
use Yaurau\Models\SiteValues;

CreateController::viewCreatePanel();
if(isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_email'])){
    ValidateLogin::createTable();
    SiteValues::baseValues();
}
