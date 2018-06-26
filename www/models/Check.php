<?php


namespace Yaurau\Models;


class Check extends Database
{
    public function checkCreateSite()
    {
        return $this->getValues('SHOW TABLES');
    }
}