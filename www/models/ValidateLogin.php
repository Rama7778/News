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
        if($data->checkCreateSite() != null){
                return true;
        } else {
            return false;
        }

    }
    static public function createTable()
    {
        Database::createTable();
        Database::createAccount();
        Database::createTableValues();
    }
}