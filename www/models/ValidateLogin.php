<?php

namespace Yaurau\Models;
use Yaurau\Models\Database;

class ValidateLogin
{
    static public function validate()
    {
        $data = new Database;
        foreach ($data->checkCreateSite() as $row){
            return $row;
        }
    }
    static public function createTable()
    {
        Database::createTable();
        Database::createAccount();

    }

}