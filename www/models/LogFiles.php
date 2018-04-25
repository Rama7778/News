<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.05.2017
 * Time: 8:30
 */

class LogFiles
{
    static public function putContents ($e) {
        return file_put_contents('PDOErrors.txt', $e, FILE_APPEND);
    }
}