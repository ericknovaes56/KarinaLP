<?php

namespace App\Core\Controller\Components\Feedbacks;

use App\Core\Controller\Components\Feedbacks\Feedback;
use App\Utils\View;

class Feedbacks {

    public static function render() {

        $feedbacks = [
            [
                "name" => "Aline",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://youtu.be/xFu-g4thN78",
                "pronoun" => "she"
            ],
            [
                "name" => "Prado",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://youtu.be/Vx-OFbuYpVk",
                "pronoun" => "she"
            ],
            [
                "name" => "Tatiane",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://youtu.be/JYpoKkBXYBo",
                "pronoun" => "she"
            ],
            [
                "name" => "Vanessa",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://www.youtube.com/watch?v=0rQ8xr_tDqk",
                "pronoun" => "she"
            ],
            [
                "name" => "\"Sem nome\"",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://youtu.be/_vT7B66mRhM",
                "pronoun" => "she"
            ],
        ];

        $componentView = "Components/feedbacks";
        $componentVars = [
            "feedbacks" => implode("\r\n", array_map(function ($feedback) {

                return Feedback::render($feedback);

            }, $feedbacks))
        ];

        return View::render($componentView, $componentVars);

    }

}