<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

class LogFiles
{
    static public function putContents ($e) {
        return file_put_contents('PDOErrors.txt', $e, FILE_APPEND);
    }
}