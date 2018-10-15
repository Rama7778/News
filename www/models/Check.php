<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

use Yaurau\Controllers\AdminController;

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

    /**
     * @return array
     */
    public function checkCreateTablesPublic() : array
    {
        return $this->getValues('SHOW TABLES');
    }

    public function authorizationForm()
    {
        return $this->authorization->getAll('SELECT `email`, `password` FROM `login` WHERE `email` = :email AND `password` = :password', [
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ]);
    }

    /**
     * @return bool
     */
    public static function checkCreateConst() : bool
    {
        $filename = __DIR__ . '/../config.php';
        $content = file_get_contents($filename);
        if (strpos ($content, 'define')!= NULL) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkCreateTables() : bool
    {
        $obj = new self();
        if($obj->checkCreateTablesPublic()){
            return true;
        };
    }

    public static function setFormConst() : void
    {
        if (isset($_POST['submit']) && !empty($_POST['name_DB'])&& !empty($_POST['login_DB'])) {
            Maker::runCreateConfig($_POST['name_DB'], $_POST['login_DB'], $_POST['password_DB']);

        }
    }

    public static function setForm ()
    {
        if (isset($_POST['submit']) && !empty($_POST['new_email']) && !empty($_POST['new_password'])) {
           return true;
        }
    }
}