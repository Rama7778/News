<?php
namespace Yaurau\Models;

class Values extends Database
{
    public $connect;

    public function __construct()
    {
        parent::__construct();
        $this->connect = new Database();
    }

    public function setValues($name, $value)
    {
        $this->connect->setPreparedQuery('INSERT INTO `value`(`name`, `value`) VALUES (:name,:value)' , [
            ':name' => $name,
            ':value' => $value
        ]);
    }

    public function getBaseValues()
    {
       return  $this->connect->getValues('SELECT `name`, `value` FROM value');
    }

    public function insert()
    {
        $this->connect->setPreparedQuery('INSERT INTO `login`(`email`, `password`) VALUES (:email,:password)', [
            ':email' => htmlentities($_POST['new_email']),
            ':password' => htmlentities($_POST['new_password'])
        ]);
    }

}