<?php

namespace App\Core\Controller\Pages;

use App\Core\Controller\Components\BaseStructure;
use App\Utils\View;
use App\Core\Controller\Components\NavBar;

class Home {

    public static function render($params = []) {

        $pageVars = [
            "navbar" => NavBar::render(),
            "header" => View::render('COmponents/header')
            // "main" => "",
            // "footer" => "",
        ];

        echo BaseStructure::render(
            View::render("pages/home", $pageVars),
            [
                'links' => [
                    ["rel" => "stylesheet", "href" => URL_BASE."/assets/css/home.css"]
                ],
                'scripts' => [
                    ["async", "src" => URL_BASE."/assets/js/home.js"]
                ]
            ]
        );

    }

}