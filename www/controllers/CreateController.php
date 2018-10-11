<?php
namespace Yaurau\Controllers;

require_once __DIR__ .'/../autoload.php';

use Yaurau\Models\{
    Maker, View, Check
};


class CreateController
{
    public static function viewCreatePanel()
    {
        $path = 'create.html.twig';
        $array = ['title' => 'Yaurau Framework'];
        View::getView($path, $array);
        Check::setForm();

    }
    public static function viewCreateLogin()
    {
        $path = 'create.html.twig';
        $array = ['title' => 'Yaurau Framework'];
        View::getView($path, $array);
        Check::setForm();
        Maker::runCreateTable();
    }
}