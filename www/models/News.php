<?php
require_once __DIR__ . "/../autoload.php";
class News
{
    function upDate()
    {
        $id = $_GET ['id'];
        $text = $_POST ['textNew'];
        $title = $_POST ['titleNew'];
        $date = $_POST ['dateNew'];
        return "UPDATE `news` SET `title`='$title' ,`text`= '$text',`date`= '$date' WHERE id=$id";
    }

    function newsAdd()
    {
        $text = $_POST ['text'];
        $title = $_POST ['title'];
        $date = $_POST ['date'];
        $sql = "INSERT INTO `news`(title, text , date) VALUES ( '$title' , '$text' , '$date')";
        $add = new Database();
        $add->sql($sql);
        if ((!empty($_POST ['text'])) && (!empty($_POST ['title'])) && (!empty($_POST ['date']))) {
            return 'Новость отправлена';
        } else {
            return 'Форма не до конца заполенена';
        }
    }
}