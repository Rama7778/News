<?php

namespace Application\Controllers;
use Application\Models\News as NewsModels;
use Application\Models\View;
require_once __DIR__ . '/../autoload.php';
class News {
    protected $news;
    protected $key;
    public static function AllNews() {
        $news_1 = NewsModels::getAll();
        View::data($news_1);
        View::display ('index.php');
    }
    public static function OneNews() {
        $id = $_GET ['id'];
        $news = NewsModels::getOne ($id);
        View::data($news);
        View::display ('one.php');
    }
    public static function searchNews() {
        $post = $_POST ['title'];
        $news = NewsModels::search ($post);
        View::data($news);
        //View::post($post);
        View::display ('search.php');

    }
}




