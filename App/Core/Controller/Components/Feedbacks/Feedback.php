<?php

namespace App\Core\Controller\Components\Feedbacks;

use App\Utils\View;
use App\Utils\Formatting;

class Feedback {

    public static function render(array $feedback) {

        $componentView = "Components/feedbacks/feedback";
        $componentVars = $feedback;

        $componentVars["video"] = Formatting::toIframeSrc($feedback["video"], "youtube");

        return View::render($componentView, $componentVars);

    }

}