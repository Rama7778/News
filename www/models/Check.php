<?php
namespace Yaurau\Models;

class Check extends Database
{
    public function createSite()
    {
        return $this->getValues('SHOW TABLES');
    }
    public static function setForm()
    {
        if (isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_password'])) {
            Table::create();
            SiteValues::setBaseValues();
            return 'true';
        }
    }
}