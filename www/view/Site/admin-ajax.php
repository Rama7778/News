<?php
require_once __DIR__ . '/../../autoload.php';

$dsn = 'mysql:dbname=yaurau; host=localhost';
$dbn = new PDO($dsn, 'root', '');
$sql = "UPDATE `value` SET `value` = :value WHERE `name`= :name";
foreach ($_POST as $key=>$value){

    $sth = $dbn->prepare($sql);
    $sth->execute([
        ':name' => $key,
        ':value' => $value
    ]);


}