<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

use Yaurau\Models\Database;

/**
 * Class Values
 * @package Yaurau\Models
 */
class Values extends Database
{
    /**
     * @var \Yaurau\Models\Database
     */
    public $connect;

    /**
     * Values constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->connect = new Database();
    }

    /**
     * @param $name
     * @param $value
     */
    public function setValues($name, $value)
    {
        $this->connect->setPreparedQuery('INSERT INTO `value`(`name`, `value`) VALUES (:name, :value)' , [
            ':name' => $name,
            ':value' => $value
        ]);
    }

    /**
     * @return array
     */
    public function getBaseValues()
    {
       return  $this->connect->getValues('SELECT `name`, `value` FROM value');
    }

    public function insert()
    {
        $this->connect->setPreparedQuery('INSERT INTO `login`(`email`, `password`) VALUES (:email, :password)', [
            ':email' => htmlentities($_POST['new_email']),
            ':password' => htmlentities($_POST['new_password'])
        ]);
    }

    /**
     * @param $name
     * @param $value
     */
    public function updateValues($name, $value)
    {
        $this->connect->setPreparedQuery('UPDATE `value` SET `value` = :value WHERE `name`= :name' , [
            ':name' => '"'. $name .'"',
            ':value' => '"' . $value . '"'
        ]);
    }

}