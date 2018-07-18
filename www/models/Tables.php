<?php
namespace Yaurau\Models;

class Tables extends Database
{
    private $create;

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
            name text(50), value text,			
            PRIMARY KEY(`id`))'
        );
        return true;
    }

}