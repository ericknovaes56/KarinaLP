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
            "mainSections" => CourseInfos::render(),
            'cards' => View::render('Components/pergunta_card')
        ];

        echo BaseStructure::render(
            View::render("Pages/home", $pageVars),
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