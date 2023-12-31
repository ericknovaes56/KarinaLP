<?php

namespace App\Core\Controller\Pages;

use App\Utils\View;

use App\Core\Controller\Components\BaseStructure;
use App\Core\Controller\Components\NavBar;
use App\Core\Controller\Components\CourseInfos\CourseInfos;
use App\Core\Controller\Components\PersonInformation;
use App\Core\Controller\Components\Feedbacks\Feedbacks;
use App\Core\Controller\Components\Comunidade;
use App\Core\Controller\Components\Footer;

class Home {

    public static function render($params = []) {

        $pageVars = [
            "navbar" => NavBar::render(),
            "mainSections" => implode("\r\n", [
                CourseInfos::render(),
                PersonInformation::render(),
                Feedbacks::render(),
                Comunidade::render(),
            ]),
            "footer"=> Footer::render()
        ];

        echo BaseStructure::render(
            View::render("Pages/home", $pageVars),
            [
                'links' => [
                    ["rel" => "stylesheet", "href" => URL_BASE."/assets/css/home.css"]
                ],
                'scripts' => [
                    ["type" => "module", "defer" => true, "src" => URL_BASE."/assets/js/home.js"]
                ]
            ]
        );

    }

}