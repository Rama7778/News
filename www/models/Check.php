<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

class Check extends Database
{
    /**
     * @var Database
     */
    private  $authorization;

    /**
     * Check constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->authorization = new Database();
    }

    public function createSite()
    {
        return $this->getValues('SHOW TABLES');
    }

    public static function setForm()
    {
        if (isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_password'])) {
            $tables= new Tables;
            $tables->create();
            $values = new Values();
            $values->insert();
            SiteValues::setBaseValues();
            return 'true';
        }
    }

    public function authorizationForm()
    {
        return $this->authorization->getAll('SELECT `email`, `password` FROM `login` WHERE `email` = :email AND `password` = :password', [
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ]);
    }

    static public function checkLogin()
    {
        $check = new Check();
        if($check->createSite() != null){
            return true;
        } else {
            return false;
        }

    }

}