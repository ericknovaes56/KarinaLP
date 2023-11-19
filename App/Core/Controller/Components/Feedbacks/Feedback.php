<?php

namespace App\Core\Controller\Components\Feedbacks;

use App\Utils\View;

class Feedback {

    public static function render(array $feedback) {

        $componentView = "Components/feedbacks/feedback";
        $componentVars = [];

        $componentVars = array_merge($componentVars, $feedback);

        return View::render($componentView, $componentVars);

    }

}