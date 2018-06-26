<?php

namespace Yaurau\Models;

use Yaurau\Models\Database;
use Yaurau\Controllers\CreateController;
use Yaurau\Controllers\SiteController;

class Validate
{
    static public function checkLogin()
    {
        $data = new Check;
        if($data->createSite() != null){
                return true;
        } else {
            return false;
        }

    }

}