<?php
require __DIR__ .'/../autoload.php';
class Redirection
{
    public function cookeSession()
    {
        CookeSession::put();
        foreach ($_COOKIE as $login => $password) {//Перенапровление зарегистрированных пользоваелей
            if (($login !== 'root') && ($password !== '1')) {
                header("Location:http://news");
                exit;
            }
        }
    }
}
?>
