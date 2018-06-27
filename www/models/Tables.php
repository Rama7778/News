<?php

namespace Yaurau\Models;

interface Table
{
    public function create();
}
class Tables extends Database implements Table
{
    public $create;

    public function __construct()
    {
        parent::__construct();
        $this->create = new Database();
    }

    public function create()
    {
        $this->create->setQuery('CREATE TABLE login (
            id INT(11) NOT NULL AUTO_INCREMENT,
            email text(50), password text(50),			
            PRIMARY KEY(`id`))'
        );
        $this->create->setQuery('CREATE TABLE value (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name text(50), value text(50),			
            PRIMARY KEY(`id`))'
        );
        return true;
    }

}