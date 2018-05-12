<?php
namespace Application\Controllers;
use Application\classes\Mail;
use Application\Models\News as NewsModels;
use Application\Models\View;

require_once __DIR__ . '/../autoload.php';

class AdminController {
    protected $id;
    protected $title;
    protected $text;
    public static function setUpdateNews () { // Получение изменяемой новости
        $id = $_GET ['id'];
        $news = NewsModels::getOne ($id);
        View::data($news);
        View::display ('edit.php');
    }
    public static function setNewNews () { // Получение изменяемой новости
        View::display ('addfail.php');
    }

    public function inputNews () {

        $news = new NewsModels();
        $news->title =  $_POST ['title'];
        $news->text =  $_POST ['text'];
        $news->date =  $_POST ['date'];
        $news->save();
        Mail::getMail();
        View::display ('distrue.php');
    }
    public function updateNews () {
        $news = new NewsModels();
        $news->title =  $_POST ['titleNew'];
        $news->text =  $_POST ['textNew'];
        $news->date =  $_POST ['dateNew'];
        $news->id = $_GET ['id'];
        $news->update();
        View::display ('editOut.php');
    }
    public function cookeSessionNews()
    {
        \CookeSession::put();
        foreach ($_COOKIE as $login => $password) {//Перенапровление зарегистрированных пользоваелей
            if (($login !== 'root') && ($password !== '1')) {
                header("Location:/");
                exit;
            }
        }
    }
    static public function adminPanelNews () {
        View::display ('log.php');
    }
}
