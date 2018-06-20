<?php

namespace Yaurau\Models;
use Yaurau\Models\Database;
use Yaurau\Controllers\CreateController;
use Yaurau\Controllers\SiteController;


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
        Database::createTableValues();
    }
}