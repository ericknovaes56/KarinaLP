<?php

namespace App\Core\Controller\Components\CourseInfos;

use App\Utils\View;
use League\CommonMark\CommonMarkConverter;

class Module {

    public static function render(array $module) {

        $markdownConverter = new CommonMarkConverter();

        $componentView = "Components/course_infos/module";
        $componentVars = [
            "title" => $module["title"],
            "media" => isset($module["media"]) ? View::render("$componentView/media/".$module["media"]["type"], [
                "src" => isset($module["media"]["src"]) ? $module["media"]["src"] : null
            ]) : null,
            "content" => $markdownConverter->convert($module["content"]),
        ];

        return View::render($componentView, $componentVars);

    }

}