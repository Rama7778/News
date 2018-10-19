<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Controllers;

use Yaurau\Models\{View, Maker};

class CreateControllerLogin
{
    public function getView()
    {
        $path = 'createLogin.html.twig';
        $array = ['title' => 'Yaurau Framework'];
        View::getView($path, $array);
    }
}