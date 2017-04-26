<?php
class CookeSession { //создает cooke
    public static function put()
    {
        if (isset ($_POST ['save'])) {
            setcookie('login', $_POST ['login'], time()+2556, "/");
            setcookie ('password', $_POST ['password'], time()+2556, "/");
        } else {
            session_start();
            $_SESSION ['login'] = $_POST ['login'];
            $_SESSION ['password'] = $_POST ['password'];
        }
        if (isset ($_POST ['end'])){
            setcookie('login', $_POST ['login'], time()-2556, "/");
            setcookie ('password', $_POST ['password'], time()-2556, "/");
        }
    }
}


