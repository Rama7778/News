<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.10.2018
 * Time: 14:47
 */

namespace Yaurau\Models;


class Maker
{
    private const FILE = 'config.php';

    public static function runCreateConfig($name_DB, $login_DB, $password_DB)
    {
        $data =
            "                
    define('DB_NAME', '$name_DB'); 
    define('DB_USER', '$login_DB'); 
    define('DB_HOST', 'localhost');
    define('DB_PASSWORD', '$password_DB');"
        ;
        file_put_contents(self::FILE, $data, FILE_APPEND );
    }
    public static function runCreateTable() :void
    {
        $tables= new Tables;
        $tables->create();
        $values = new Values();
        $values->insert();
        SiteValues::setBaseValues();
    }

}