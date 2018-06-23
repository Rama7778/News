<?php
namespace Yaurau\Models;
use \PDO;
use \PDOException;

class Database
{
public $query;
private $dbn;
protected $className;
    public function __construct()
    {
        try {
        $dsn = 'mysql:dbname=yaurau; host=localhost';
        $this->dbn = new PDO($dsn, 'root', '');
        $this->dbn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        }
         catch(PDOException $e) {
                $mess = $e->getMessage() . ' Time ' . getdate()['hours'] . ':' . getdate()['minutes']  .
             ' Date ' . getdate()['mday'].'.' . getdate()['month'] . '.' . getdate()['year'] . '///';


                echo time() . $e->getFile();
                //View::display('error403.php');
                LogFiles::putContents($mess);
                "Хьюстон, у нас проблемы.";
                file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
         }
    }
    public function prepare ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
        return $result = $sth->fetchAll();
    }
    public function setQuery ($sql)
    {
        $sth = $this->dbn->query($sql);
        return $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function exec ($sql)
    {
        return $this->dbn->exec($sql);
    }
        public function execute ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
    }

    static public function authorizationForm()
    {
        $authorization = new Database();
        return $authorization->prepare('SELECT `email`, `password` FROM `login` WHERE `email` = :email AND `password` = :password', [
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ]);
    }
    public function checkCreateSite()
    {
        return $this->setQuery('SHOW TABLES');
    }
    static public function createTable()
    {
        $create = new Database();
        $create->exec('CREATE TABLE login (
            id INT(11) NOT NULL AUTO_INCREMENT,
            email text(50), password text(50),			
            PRIMARY KEY(`id`))'
       );
    }
    static public function createAccount()
    {
        $createAccount = new Database();
        $createAccount->execute('INSERT INTO `login`(`email`, `password`) VALUES (:email,:password)', [
            ':email' => htmlentities($_POST['new_email']),
            ':password' => htmlentities($_POST['new_password'])
        ]);
    }
    static function createTableValues()
    {
        $create = new Database();
        $create->exec('CREATE TABLE value (
            id INT(11) NOT NULL AUTO_INCREMENT,
            name text(50), value text(50),			
            PRIMARY KEY(`id`))'
        );
    }
    static function insertValues($name, $value)
    {
        $createAccount = new Database();
        $createAccount->execute('INSERT INTO `value`(`name`, `value`) VALUES (:name,:value)' , [
            ':name' => $name,
            ':value' => $value
        ]);
    }
    static function receiveBaseValues()
    {
        $sql = 'SELECT `name`, `value` FROM value';
        $sth = new Database();
        return $sth->setQuery($sql);
    }
}