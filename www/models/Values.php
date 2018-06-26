<?php
namespace Yaurau\Models;

use Yaurau\Models\Database;

class Values extends Database
{
    public $connect;
    public function __construct()
    {
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
}