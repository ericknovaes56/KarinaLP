<?php

namespace App\Core\Controller\Pages;

use App\Core\Controller\Components\BaseStructure;
use App\Utils\View;

class Home {

    public static function render($params = []) {

        $pageVars = [];

        echo BaseStructure::render(
            View::render("pages/home", $pageVars),
            [
                // aqui vai os parâmetros da BaseStructure
            ]
        );

    }

}