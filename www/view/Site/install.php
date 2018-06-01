<?php

require_once __DIR__ . '/../../autoload.php';
use Yaurau\Controllers\CreateController;
use Yaurau\Models\ValidateLogin;

CreateController::viewCreatePanel();
if(isset($_POST['submit'])){
ValidateLogin::createTable();
}