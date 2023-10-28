<?php

namespace App\Core\Controller;

use App\Utils\View;

class Home {

    public static function render($params = []) {

        $pageVars = [];

        View::render("pages/home", $pageVars);

    }

}