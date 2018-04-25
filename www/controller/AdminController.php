<?php
require_once __DIR__ . '/../autoload.php';
class AdminController {
    protected $id;
    protected $title;
    protected $text;
    public static function GetNews () { // Изменение одной новости
        $id = $_GET ['id'];
        $news = News::getOneNews ();
        include_once __DIR__ . '/../public/edit.php';
    }
    public function PutNews ()
    {
        echo 'Hello';
        View::display ('addfail.php');

        //Запись изменения
       // $id = $_GET ['id'];
        //$news = News::getOneNews();
       // include_once __DIR__ . '/../public/editOut.php';
    }
    public function inputNews () {

        $news = new NewsModel();
        $news->title = "Привет мир";
        $news->text = "Привет мир, мир привет ";
        //$news->insert();

    }

}
