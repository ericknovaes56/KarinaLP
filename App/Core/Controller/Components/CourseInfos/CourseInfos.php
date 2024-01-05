<?php

namespace App\Core\Controller\Components\CourseInfos;

use App\Utils\View;

use App\Core\Controller\Components\CourseInfos\Module;
use App\Utils\Br;

class CourseInfos {

    public static function render() {

        $modules = [
            [
                "title" => "Titulo aqui",
                "media" => [
                    "type" => "video",
                    "src" => "#",
                ],
                "content" =>
                    "# Título Principal"
                    .Br::gen().
                    "## Subtítulo"
                    .Br::gen().
                    "### Subtítulo secundário"
                    .Br::gen(2).
                    "- Lista"
                    .Br::gen().
                    "- De"
                    .Br::gen().
                    "- Itens"
                    .Br::gen(2).
                    "1. Lista numerada"
                    .Br::gen().
                    "2. De itens"
                    .Br::gen().
                    "3. Aqui"
                    .Br::gen(2).
                    "**Texto em negrito**"
                    .Br::gen().
                    "*Texto em itálico*"
                    .Br::gen(2).
                    "> Aqui é o blockquote"
                    .Br::gen(2).
                    "[Link para o Google](https://www.google.com)"
                    .Br::gen(2).
                    "![Link para imagem](https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg)"
            ],
            [
                "title" => "Titulo aqui",
                "media" => [
                    "type" => "image",
                    "src" => "#",
                ],
                "content" => 
                    "# Título Principal"
                    .Br::gen().
                    "## Subtítulo"
                    .Br::gen().
                    "### Subtítulo secundário"
                    .Br::gen(2).
                    "- Lista"
                    .Br::gen().
                    "- De"
                    .Br::gen().
                    "- Itens"
                    .Br::gen(2).
                    "1. Lista numerada"
                    .Br::gen().
                    "2. De itens"
                    .Br::gen().
                    "3. Aqui"
                    .Br::gen(2).
                    "**Texto em negrito**"
                    .Br::gen().
                    "*Texto em itálico*"
                    .Br::gen(2).
                    "> Aqui é o blockquote"
                    .Br::gen(2).
                    "[Link para o Google](https://www.google.com)"
                    .Br::gen(2).
                    "![Link para imagem](https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg)"
            ],
            [
                "title" => "Titulo aqui",
                "media" => [
                    "type" => "image",
                    "src" => "#",
                ],
                "content" => 
                    "# Título Principal"
                    .Br::gen().
                    "## Subtítulo"
                    .Br::gen().
                    "### Subtítulo secundário"
                    .Br::gen(2).
                    "- Lista"
                    .Br::gen().
                    "- De"
                    .Br::gen().
                    "- Itens"
                    .Br::gen(2).
                    "1. Lista numerada"
                    .Br::gen().
                    "2. De itens"
                    .Br::gen().
                    "3. Aqui"
                    .Br::gen(2).
                    "**Texto em negrito**"
                    .Br::gen().
                    "*Texto em itálico*"
                    .Br::gen(2).
                    "> Aqui é o blockquote"
                    .Br::gen(2).
                    "[Link para o Google](https://www.google.com)"
                    .Br::gen(2).
                    "![Link para imagem](https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg)"
            ],
            [
                "title" => "Titulo aqui",
                "media" => [
                    "type" => "image",
                    "src" => "#",
                ],
                "content" => 
                    "# Título Principal"
                    .Br::gen().
                    "## Subtítulo"
                    .Br::gen().
                    "### Subtítulo secundário"
                    .Br::gen(2).
                    "- Lista"
                    .Br::gen().
                    "- De"
                    .Br::gen().
                    "- Itens"
                    .Br::gen(2).
                    "1. Lista numerada"
                    .Br::gen().
                    "2. De itens"
                    .Br::gen().
                    "3. Aqui"
                    .Br::gen(2).
                    "**Texto em negrito**"
                    .Br::gen().
                    "*Texto em itálico*"
                    .Br::gen(2).
                    "> Aqui é o blockquote"
                    .Br::gen(2).
                    "[Link para o Google](https://www.google.com)"
                    .Br::gen(2).
                    "![Link para imagem](https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg)"
            ],
            [
                "title" => "Titulo aqui",
                "media" => [
                    "type" => "image",
                    "src" => "#",
                ],
                "content" => 
                    "# Título Principal"
                    .Br::gen().
                    "## Subtítulo"
                    .Br::gen().
                    "### Subtítulo secundário"
                    .Br::gen(2).
                    "- Lista"
                    .Br::gen().
                    "- De"
                    .Br::gen().
                    "- Itens"
                    .Br::gen(2).
                    "1. Lista numerada"
                    .Br::gen().
                    "2. De itens"
                    .Br::gen().
                    "3. Aqui"
                    .Br::gen(2).
                    "**Texto em negrito**"
                    .Br::gen().
                    "*Texto em itálico*"
                    .Br::gen(2).
                    "> Aqui é o blockquote"
                    .Br::gen(2).
                    "[Link para o Google](https://www.google.com)"
                    .Br::gen(2).
                    "![Link para imagem](https://img.freepik.com/premium-vector/photo-icon-picture-icon-image-sign-symbol-vector-illustration_64749-4409.jpg)"
            ],
        ];

        $componentVars = [
            "modules" => implode("\r\n", array_map(function ($module) {

                return Module::render($module);

            }, $modules))
        ];

        return View::render("Components/course_infos", $componentVars);

    }

}