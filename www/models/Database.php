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
    public function query ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
        return $result = $sth->fetchAll();
    }
    public function execute ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        return $sth->execute($parameter);
    }
    static public function authorizationForm()
    {
        $authorization = new Database();
        return $authorization->query('SELECT `email`, `password` FROM `login` WHERE `email` = :email AND `password` = :password', [
            ':email' => $_POST['email'],
             ':password' => $_POST['password']
        ]);
    }
}