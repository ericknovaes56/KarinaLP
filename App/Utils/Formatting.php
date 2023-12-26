<?php

namespace App\Utils;

use Exception;

class Formatting {

    public $status = [];

    public static function arrayToAttributes(array $attributes) {
        
        return implode(" ", array_map(function ($attribute, $value) {

            if(is_bool($value)){

                return $attribute;

            }

            return "$attribute=\"$value\"";

        }, array_keys($attributes), array_values($attributes)));

    }

    /**
     * 
     * @param string $url That will be converted to src of the iframe
     * @param string $website That tell us what website $url is from
     * 
     * @return string|void and calls method setStatus() if there is some Exception. Call getStatus() to get status and message of the Exception
     * 
    */

    public static function toIframeSrc(string $url, string $website) {

        try {

            $urls = [
                "youtube" => "https://www.youtube.com/embed/:id",
                "vimeo" => "https://player.vimeo.com/video/:id?color=".SITE_THEME,
                "drive" => "http://drive.google.com/file/d/:id/preview?showinfo=0",
                "direct" => "$url?showinfo=0"
            ];
    
            $regexExpression = "/(((http(s)?:\/\/)(www.|music.|m.)?(youtube.com|youtu.be)(\/){1}((watch(\/)?\?v=)|((v\/{1})|embed\/))?)|(((http(s)?:\/\/)((player.|www.)?vimeo.com)\/{1})(video\/)?)|((http(s)?:\/\/){1}(drive.google.com){1}(\/file\/d\/|\/file\/u\/0\/d\/){1}))|([&](.*)|([?](.*))|((\/){1}(view|preview)[?]?(.*)))/";
    
            if(!isset($urls[$website])){
                
                throw new Exception("O website fornecido não tem um link de incorporação padrão");
                
            }

            $videoId = preg_replace($regexExpression, "", $url);
            $formattedUrl = str_replace(":id", $videoId, $urls[$website]);
    
            return $formattedUrl;

        } catch(Exception $e) {

            self::$status = [
                "status" => "error",
                "message" => $e->getMessage()
            ];

        }

    }

}