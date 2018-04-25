<?php
namespace Yaurau\Models;
require_once __DIR__ . "/../autoload.php";

class View

implements \Iterator
{
    static protected $news = [];
    static public $post;

    public function __set ($key, $text=false){
        self::$news[$key] = $text;
    }
    public function __get ($key) {
        return self::$news[$key];
    }
    public function current() // выводит текущий элемент массива
    {
        return current(self::$news);
    }
    public function next() // пропускает элемент
    {
        next(self::$news);
    }
    public function key() // находит по ключу
    {
        return key(self::$news);
    }
    public function valid() // определяет не вышлипустой ключ
    {
        return false !== key(self::$news);
    }
    public function rewind() // возвращается в начало массива
    {
        reset (self::$news);
    }
    public static function display ($news_1) {

        include __DIR__ . '/../public/news/' . $news_1 ;
    }

    public static function data($text)
    {
        return self::$news = $text;
    }
}
