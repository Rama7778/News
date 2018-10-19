<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

class Tables extends Database
{
    private $create;
    static  private $createTableLogin = 'CREATE TABLE `login` (
            id INT(11) NOT NULL AUTO_INCREMENT,
            email text(50), password text(50),			
            PRIMARY KEY(`id`));';
    static  private $createTableValue = 'CREATE TABLE `value` (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name text(50), value text(50),			
            PRIMARY KEY(`id`));';

    public function __construct()
    {
        parent::__construct();
        $this->create = new Database();
    }

    public function create()
    {
        $this->create->setTransaction(
            self::$createTableLogin . self::$createTableValue
        );
        return true;
    }

}