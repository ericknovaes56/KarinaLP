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
                "video" => "https://drive.google.com/file/d/1Pg5Fcb6ZdMlaVt9HpGtzPg6-1pdIsatV/preview",
                "pronoun" => "she"
            ],
            [
                "name" => "Prado",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://drive.google.com/file/d/1oZEpgjKjswmLixOfOYfAsINGP-kIb550/preview",
                "pronoun" => "she"
            ],
            [
                "name" => "Tatiane",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://drive.google.com/file/d/1sAf0FMtCxkMP9cKH_ij3E3dOkU3vVP35/preview",
                "pronoun" => "she"
            ],
            [
                "name" => "Vanessa",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://drive.google.com/file/d/1NqZdQXdOB48n53Xy1KhByLdCcT_1X1hH/preview",
                "pronoun" => "she"
            ],
            [
                "name" => "\"Sem nome\"",
                "photo" => "https://roadmap-tech.com/wp-content/uploads/2019/04/placeholder-image.jpg",
                "video" => "https://drive.google.com/file/d/1fJJvbYdIUxKgdkrJ9uCSsq2x40c83vfF/preview",
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