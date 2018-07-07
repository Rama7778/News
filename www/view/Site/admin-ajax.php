<?php
require_once __DIR__ . '/../../autoload.php';
var_dump($_POST);
foreach ($_POST as $key=>$value){

    $values = new \Yaurau\Models\Values();
    $values->updateValues($key, $value);

}