<?php
/**
 *  @author   Rauvtovich Yauhen
 *  @copyright 2018
 *  @license   GPL-2.0+
 */

namespace Yaurau\Models;

class SiteValues
{
    static public function setBaseValues()
    {
        $array = [
            'title' => 'Yaurau Framework',
            'banner_1'=> 'baner1.jpg',
            'banner_2'=> 'baner2.jpg',
            'banner_3'=> 'baner3.jpg',
            'what_we' => 'what we',
            'we_offer_our_customers' => 'we offer our customers',
            'our_service' => 'Our service',
            'we_offer_our_service' => 'we offer our service',
            'projects' => 'Projects',
            'title_banner_first_1' => 'title banner first',
            'text_banner_second_1' => 'text banner',
            'title_banner_first_2' => 'title banner first',
            'text_banner_second_2' => 'text banner',
            'title_banner_first_3' => 'title banner first',
            'text_banner_second_3' => 'text banner',
            'icon_title_offer_1' => 'icon_title_offer_1',
            'icon_text_offer_1' => 'icon_text_offer_1',
            'icon_title_offer_2' => 'icon_title_offer_2',
            'icon_text_offer_2' => 'icon_text_offer_2',
            'icon_title_offer_3' => 'icon_title_offer_3',
            'icon_text_offer_3' => 'icon_text_offer_3',
            'icon_title_service_1' => 'icon_title_service_1',
            'icon_text_service_1' => 'icon_title_service_1',
            'icon_title_service_2' => 'icon_title_service_2',
            'icon_text_service_2' => 'icon_title_service_2',
            'icon_title_service_3' => 'icon_title_service_3',
            'icon_text_service_3' => 'icon_title_service_3',
            'icon_title_service_4' => 'icon_title_service_4',
            'icon_text_service_4' => 'icon_title_service_4',
            'telefon' => '222-0002-222222',
            'map' => '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%
3Adc1b0285c7e2c088a3b27e4da7541a6d60b72b2081464087537df146afb6b21f&amp;source=constructor"
 width="100%" height="400" frameborder="0"></iframe>',
            'mail' => 'mailto:info@example.com'];
        foreach ($array as $key=>$value){
            $val = new Values();
            $val->setValues($key, $value);
        }
    }

    /**
     * @return array
     */
    static public function addValues()
    {
        $val = new Values();
        return $val->getBaseValues();
    }

}