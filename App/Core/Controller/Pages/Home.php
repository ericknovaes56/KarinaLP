<?php

namespace App\Core\Controller\Pages;

use App\Core\Controller\Components\BaseStructure;
use App\Core\Controller\Components\CourseInfos;
use App\Utils\View;
use App\Core\Controller\Components\NavBar;

class Home {

    public static function render($params = []) {

        $pageVars = [
            "navbar" => NavBar::render(),
            "header" => View::render('Components/header'),
            "mainSections" => CourseInfos::render(),
        ];

        echo BaseStructure::render(
            View::render("pages/home", $pageVars),
            [
                'links' => [
                    ["rel" => "stylesheet", "href" => URL_BASE."/assets/css/home.css"]
                ],
                'scripts' => [
                    ["defer" => true, "src" => URL_BASE."/assets/js/home.js"]
                ]
            ]
        );

    }

}