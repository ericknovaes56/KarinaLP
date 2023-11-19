<?php

namespace App\Core\Controller\Components;

use App\Utils\View;

class NavBar {

    public static function render() {
        $pageVars = [

        ];

        return View::render('Components/navbar', $pageVars);
    }

}