<?php


namespace App\Core\Controller\Components;
use App\Utils\View;
class Footer {
    public static function render(){
        $pageVars = [
            'cards' => View::render('Components/pergunta_card'),
        ];

        return View::render("Components/layout/footer",$pageVars);

    }
}