<?php
namespace Yaurau\Models;

class CreateTable
{
    public static function create()
    {
        if (isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_password'])) {
            ValidateLogin::createTable();
            SiteValues::baseValues();
            return 'true';
        }
    }
}