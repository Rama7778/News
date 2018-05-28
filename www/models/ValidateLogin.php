<?php

namespace Yaurau\Models;

class ValidateLogin
{
    static public function validate()
    {
        $data = new Database;
        foreach ($data->checkCreateSite() as $row){
            return $row;
        }
    }
}