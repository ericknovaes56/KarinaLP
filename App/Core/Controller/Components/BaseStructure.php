<?php

namespace App\Core\Controller\Components;

use App\Utils\View;

class BaseStructure {

    public static function render(string $mainContent, array $params = []) {

        $pageVars = [
            "charset" => SITE_CHARSET,
            "lang" => SITE_LANG,
            "title" => SITE_NAME,
            "mainContent" => $mainContent,
            "links" => self::getLinks(isset($params["links"]) ? $params["links"] : []),
            "scripts" => self::getScripts(isset($params["scripts"]) ? $params["scripts"] : []),
            "urlBase"=> URL_BASE
        ];

        return View::render("components/base_structure", $pageVars);

    }

    private static function getLinks(array $links = []) {

        $defaultLinks = [
            ["rel" => "stylesheet", "href" => URL_BASE."/assets/css/global.css"]
        ];

        return Links::render(array_merge($defaultLinks, $links));

    }

    private static function getScripts(array $scripts = []) {

        $defaultScripts = [
            // ["type" => "module", "src" => URL_BASE."/assets/js/global.js"]
        ];

        return Scripts::render(array_merge($defaultScripts, $scripts));

    }

}