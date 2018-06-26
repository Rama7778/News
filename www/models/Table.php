<?php
namespace Yaurau\Models;

class Table extends Database
{

    static public function create()
    {
        Database::createTable();
        Database::createAccount();
        Database::createTableValues();
    }
}