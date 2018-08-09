<?php
require_once __DIR__ . '/../../autoload.php';

$dsn = 'mysql:dbname=' . DB_NAME .'; host='. DB_HOST ;
$dbn = new PDO($dsn, DB_USER, DB_PASSWORD);
$sql = "UPDATE `value` SET `value` = :value WHERE `name`= :name";
foreach ($_POST as $key=>$value){
    $sth = $dbn->prepare($sql);
    $sth->execute([
        ':name' => $key,
        ':value' => $value
    ]);
}