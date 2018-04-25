<?php
use Yaurau\Models\View;

class Database
{
public $query;
private $dbn;
protected $className;
    public function __construct()
    {
        try {
        $dsn = 'mysql:dbname=news; host=localhost';
        $this->dbn = new PDO($dsn, 'root', '');
        $this->dbn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        }
         catch(PDOException $e) {
                $mess = $e->getMessage() . ' Time ' . getdate()['hours'] . ':' . getdate()['minutes']  .
             ' Date ' . getdate()['mday'].'.' . getdate()['month'] . '.' . getdate()['year'] . '///';


                //echo time() . $e->getFile();
                View::display('error403.php');
                LogFiles::putContents($mess);
                //"Хьюстон, у нас проблемы.";
                //file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
         }
    }
    public function getClassName($className)
    {
        $this->className = $className;
    }
    public function query ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
        return $result = $sth->fetchAll(PDO::FETCH_CLASS,
            $this->className);
    }
    public function execute ($sql, $parameter = []) {
        $sth = $this->dbn->prepare($sql);
        return $sth->execute($parameter);
    }


}