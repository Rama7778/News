<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright Y.Rauvtovich 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

class View
{
    static public function getView ($pathView, $arrayView){
        $path =$pathView;
        $array =$arrayView;
        include_once __DIR__ . '/../view/viewsite.php';
    }
}