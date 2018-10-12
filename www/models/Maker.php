<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

class Maker
{
    private const FILE = '../config.php';

    public static function runCreateConfig($name_DB, $login_DB, $password_DB)
    {
        define('DB_NAME', $name_DB);
        define('DB_USER', $login_DB);
        define('DB_HOST', 'localhost');
        define('DB_PASSWORD', $password_DB);
        $data =
            "                
    define('DB_NAME', '$name_DB'); 
    define('DB_USER', '$login_DB'); 
    define('DB_HOST', 'localhost');
    define('DB_PASSWORD', '$password_DB');"
        ;
        file_put_contents(self::FILE, $data, FILE_APPEND );
        $tables= new Tables;
        $tables->create();
        $values = new Values();
        $values->insert();
        SiteValues::setBaseValues();
    }
}