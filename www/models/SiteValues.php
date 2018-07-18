<?php
namespace Yaurau\Models;

class SiteValues
{
    static public function setBaseValues()
    {
        $array = ['name' => 'Yaurau Framework',
            'creater' => 'Yaurau Framework',
            'title' => 'Yaurau Framework',
            'what_we' => 'what we',
            'we_offer_our_customers' => 'we offer our customers',
            'our_service' => 'Our service',
            'we_offer_our_service' => 'we offer our service',
            'projects' => 'Projects',
            'title_banner_first_1' => 'title banner first',
            'title_banner_second_1' => 'title banner',
            'text_banner_second_1' => 'text banner',
            'title_banner_first_2' => 'title banner first',
            'title_banner_second_2' => 'title banner',
            'text_banner_second_2' => 'text banner',
            'title_banner_first_3' => 'title banner first',
            'title_banner_second_3' => 'title banner',
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
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.855861207814!2d27.51865981591274!3d53.86321098009061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbd0417696dcf7%3A0x409d60ef596fa55a!2z0YPQu9C40YbQsCDQmtCw0LfQuNC90YbQsCAyNCwg0JzQuNC90YHQug!5e0!3m2!1sru!2sby!4v1526110553741" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'mail' => 'mailto:info@example.com'];
        foreach ($array as $key=>$value){
            $val = new Values();
            $val->setValues($key, $value);
        }
    }
    static public function addValues()
    {
        $val = new Values();
        return $val->getBaseValues();
    }
}