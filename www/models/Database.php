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
            $dsn = 'mysql:dbname=' . DB_NAME .'; host='. DB_HOST ;
            $this->dbn = new PDO($dsn, DB_USER, DB_PASSWORD);
            $this->dbn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        }
         catch(PDOException $e) {
             $mess = $e->getMessage() . ' Time ' . getdate()['hours'] . ':' . getdate()['minutes']  .
             ' Date ' . getdate()['mday'].'.' . getdate()['month'] . '.' . getdate()['year'] . '///';
             $array['error'] = "Код исключения: " . $e->getCode();
             View::getView('error404.html.twig', $array);
             LogFiles::putContents($mess);
         }
    }

    function __wakeup() { }

    function __clone() { }

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