<?php

class Database
{
public $query;
private $dbn;
protected $className;
    public function __construct()
    {
        //$this->mysqli = mysqli_connect("localhost", "root", '', "news");
        $dsn = 'mysql:dbname=news; host=localhost';
        $this->dbn = new PDO($dsn, 'root', '');
    }


    public function getClassName($className)
    {
        $this->className = $className;
    }
    public function query ($sql, $parameter = [])
    {
        $sth = $this->dbn->prepare($sql);
        $sth->execute($parameter);
        return $result = $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
    public function execute ($sql, $parameter = []) {
        $sth = $this->dbn->prepare($sql);
        return $sth->execute($parameter);
    }
    /*$this->query = $sql;
    $l = mysqli_query($this->mysqli, $this->query);
        if ($l === false) {
            return false;
        }
        else {
            $ret = [];
            while ($rot = mysqli_fetch_object($l)) {
                $ret [] = $rot;
            }
            return $ret;
        }
    }
    public function getOne($sql){
        $this->query = $sql;
        $l = mysqli_query($this->mysqli, $this->query);
        if ($l === false) {
            return false;
        }
        else {
            $ret = [];
            while ($rot = mysqli_fetch_object($l)) {
                $ret [] = $rot;
            }
            return $ret;
        }*/

}