<?php
namespace Yaurau\Models;

class LogFiles
{
    static public function putContents ($e) {
        return file_put_contents('PDOErrors.txt', $e, FILE_APPEND);
    }
}