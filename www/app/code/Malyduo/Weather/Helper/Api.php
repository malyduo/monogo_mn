<?php
namespace Malyduo\Weather\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Api extends AbstractHelper
{
    const URL = 'https://api.openweathermap.org/data/2.5/weather?q=Lublin&appid=886705b4c1182eb1c69f28eb8c520e20';
    
    public function __construct() {
        
    }

    public static function getCurrentWeather(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, self::URL);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        curl_close($ch); 
        
        return  json_decode($output);
    }
}