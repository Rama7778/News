<?php
namespace Yaurau\Controllers;
require_once __DIR__ .'/../autoload.php';
use Yaurau\Models\Database;

class AdminController
{
    public static function viewAdminPanel()
    {
        if (Database::authorizationForm()) {
            $path = 'admin.html.twig';
            $array = [
                'name' => 'Yaurau Framework',
                'creater' => 'Yaurau Framework',
                'title' => 'Yaurau Framework',
                'what_we' => 'what we',
                'we_offer_our_customers' => 'we offer our customers',
                'Our' => 'Our',
                'service' => 'service',
                'Projects' => 'Projects'
                ];
        } else {
            $path = 'login.html.twig';
            $array = [
                'name' => 'Yaurau Framework',
                'creater' => 'Yaurau Framework',
                'title' => 'Yaurau Framework',
                'what_we' => 'what we',
                'we_offer_our_customers' => 'we offer our customers',
                'Our' => 'Our',
                'service' => 'service',
                'Projects' => 'Projects'
            ];
        }
        include_once __DIR__ . '/../view/ViewSite.php';
    }
}



