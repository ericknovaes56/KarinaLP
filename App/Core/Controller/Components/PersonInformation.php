<?php

namespace App\Core\Controller\Components;

use App\Utils\View;

class PersonInformation {

    public static function render() {

        $componentView = "Components/person_information";
        $componentVars = [];

        return View::render($componentView, $componentVars);

    }

}