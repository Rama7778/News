<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Controllers;

use Yaurau\Models\{View, Check};

class CreateController
{
    public function getView()
    {
        $path = 'create.html.twig';
        $array = ['title' => 'Yaurau Framework'];
        View::getView($path, $array);
    }
}