<?php
require_once __DIR__ . '/../../autoload.php';

foreach ($_POST as $key=>$value){
    $values = new \Yaurau\Models\Values();
    $values->setValues($key, $value);

}