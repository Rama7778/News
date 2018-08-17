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
     * @var string
     */
    static $insertNameValue = 'INSERT INTO `value`(`name`, `value`) VALUES (:name, :value)';
    /**
     * @var string
     */
    static $selectNameValue = 'SELECT `name`, `value` FROM value';
    /**
     * @var string
     */
    static $insertEmailPassword = 'INSERT INTO `login`(`email`, `password`) VALUES (:email, :password)';
    /**
     * @var string
     */
    static $updateValue = 'UPDATE `value` SET `value` = :value WHERE `name`= :name';

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
        $this->connect->setPreparedQuery( self::$insertNameValue, [
            ':name' => $name,
            ':value' => $value
        ]);
    }

    /**
     * @return array
     */
    public function getBaseValues()
    {
       return  $this->connect->getValues(self::$selectNameValue);
    }

    public function insert()
    {
        $this->connect->setPreparedQuery(self::$insertEmailPassword, [
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
        $this->connect->setPreparedQuery(self::$updateValue , [
            ':name' => '"'. $name .'"',
            ':value' => '"' . $value . '"'
        ]);
    }

}