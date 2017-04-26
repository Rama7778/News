<?php
require_once __DIR__ . "/../autoload.php";

class putNews
{
    public function getTitle($sql) // вывод заголовка
    {
        $rez = new Database();
        $rec = $rez->sql($sql);
        $ret = [];
        $rot = mysqli_fetch_array($rec);
        $ret [] = $rot;
        return $rot ['title'];
    }

    public function getText($sql) // вывод новостина странице
    {
        $rez = new Database();
        $rec = $rez->sql($sql);
        $ret = [];
        $rot = mysqli_fetch_array($rec);
        $ret [] = $rot;
        return $rot ['text'];
    }

    public function getData($sql) // вывод даты на странице
    {
        $rez = new Database();
        $rec = $rez->sql($sql);
        $ret = [];
        $rot = mysqli_fetch_array($rec);
        $ret [] = $rot;
        return $rot ['date'];
    }

}

?>


