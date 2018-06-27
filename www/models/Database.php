<?php
namespace Yaurau\Models;

use \PDO;
use \PDOException;

class Database
{
    private $dbn;

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
                View::display('error403.php');
                LogFiles::putContents($mess);
                file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
         }
    }
    public function getAll ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
        return $result = $sth->fetchAll();
    }
    public function getValues ($sql)
    {
        $sth = $this->dbn->query($sql);
        return $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setQuery ($sql)
    {
        return $this->dbn->query($sql);
    }
    public function setPreparedQuery ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
    }

}