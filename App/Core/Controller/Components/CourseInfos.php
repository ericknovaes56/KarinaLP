<?php

namespace App\Core\Controller\Components;

use App\Utils\View;

class CourseInfos {

    public static function render() {

        $componentVars = [];

        return View::render("components/course_infos", $componentVars);

    }

}