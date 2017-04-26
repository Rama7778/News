<?php

//require_once __DIR__ . '/../models/View.php';
require_once __DIR__ . '/../autoload.php';
//use View\View;
class NewsController {
    protected $news;
    protected $key;
    public static function AllNews()
    {
        /*$news = new NewsModel();
        $news->title = "Привет мир_2";
        $news->text = "Привет мир, мир привет_2 ";
        $news->insert();*/
// $news = News::getlAllNews();

        $news_1 = NewsModel::getAll();
        View::data($news_1);
        View::display ('index.php');


    }
    public static function OneNews() {
        $id = $_GET ['id'];
        $news = NewsModel::getOne ($id);
        View::data($news);
        View::display ('one.php');
    }
}




