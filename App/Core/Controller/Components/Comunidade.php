<?php

namespace App\Core\Controller\Components;

use App\Utils\View;

class Comunidade {

    public static function render() {

        $componentView = "Components/comunidade";
        $componentVars = [];

        return View::render($componentView, $componentVars);

    }

}