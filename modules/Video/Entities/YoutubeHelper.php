<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 14/07/2016
 * Time: 11:21 AM
 */

namespace Modules\Video\Entities;
use Alaouy\Youtube\Youtube;

class YoutubeHelper
{
    public static function getTitle($url){
        $TEST_API_KEY = 'AIzaSyA_mW1DiL6iERRSNVQ1N_xdDnQ7cMpIuoA';
        $youtube = new Youtube($TEST_API_KEY);
        $title= YoutubeHelper::trimString($youtube->getVideoInfo($url)->snippet->title);

        return $title;
    }
    public static function trimString($str){

        if (strlen($str) > 25)
            $str = substr($str, 0, 50) . '...';
        return $str;

    }

}
