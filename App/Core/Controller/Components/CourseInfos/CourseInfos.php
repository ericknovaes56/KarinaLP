<?php

namespace App\Core\Controller\Components\CourseInfos;

use App\Utils\View;

use App\Core\Controller\Components\CourseInfos\Module;

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
                    ."\r\n".
                    "## Subtítulo"
                    ."\r\n".
                    "### Subtítulo secundário"
                    ."\r\n\r\n".
                    "- Lista"
                    ."\r\n".
                    "- De"
                    ."\r\n".
                    "- Itens"
                    ."\r\n\r\n".
                    "1. Lista numerada"
                    ."\r\n".
                    "2. De itens"
                    ."\r\n".
                    "3. Aqui"
                    ."\r\n\r\n".
                    "**Texto em negrito**"
                    ."\r\n".
                    "*Texto em itálico*"
                    ."\r\n\r\n".
                    "> Aqui é o blockquote"
                    ."\r\n\r\n".
                    "[Link para o Google](https://www.google.com)"
                    ."\r\n\r\n".
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
                    ."\r\n".
                    "## Subtítulo"
                    ."\r\n".
                    "### Subtítulo secundário"
                    ."\r\n\r\n".
                    "- Lista"
                    ."\r\n".
                    "- De"
                    ."\r\n".
                    "- Itens"
                    ."\r\n\r\n".
                    "1. Lista numerada"
                    ."\r\n".
                    "2. De itens"
                    ."\r\n".
                    "3. Aqui"
                    ."\r\n\r\n".
                    "**Texto em negrito**"
                    ."\r\n".
                    "*Texto em itálico*"
                    ."\r\n\r\n".
                    "> Aqui é o blockquote"
                    ."\r\n\r\n".
                    "[Link para o Google](https://www.google.com)"
                    ."\r\n\r\n".
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
                    ."\r\n".
                    "## Subtítulo"
                    ."\r\n".
                    "### Subtítulo secundário"
                    ."\r\n\r\n".
                    "- Lista"
                    ."\r\n".
                    "- De"
                    ."\r\n".
                    "- Itens"
                    ."\r\n\r\n".
                    "1. Lista numerada"
                    ."\r\n".
                    "2. De itens"
                    ."\r\n".
                    "3. Aqui"
                    ."\r\n\r\n".
                    "**Texto em negrito**"
                    ."\r\n".
                    "*Texto em itálico*"
                    ."\r\n\r\n".
                    "> Aqui é o blockquote"
                    ."\r\n\r\n".
                    "[Link para o Google](https://www.google.com)"
                    ."\r\n\r\n".
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
                    ."\r\n".
                    "## Subtítulo"
                    ."\r\n".
                    "### Subtítulo secundário"
                    ."\r\n\r\n".
                    "- Lista"
                    ."\r\n".
                    "- De"
                    ."\r\n".
                    "- Itens"
                    ."\r\n\r\n".
                    "1. Lista numerada"
                    ."\r\n".
                    "2. De itens"
                    ."\r\n".
                    "3. Aqui"
                    ."\r\n\r\n".
                    "**Texto em negrito**"
                    ."\r\n".
                    "*Texto em itálico*"
                    ."\r\n\r\n".
                    "> Aqui é o blockquote"
                    ."\r\n\r\n".
                    "[Link para o Google](https://www.google.com)"
                    ."\r\n\r\n".
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
                    ."\r\n".
                    "## Subtítulo"
                    ."\r\n".
                    "### Subtítulo secundário"
                    ."\r\n\r\n".
                    "- Lista"
                    ."\r\n".
                    "- De"
                    ."\r\n".
                    "- Itens"
                    ."\r\n\r\n".
                    "1. Lista numerada"
                    ."\r\n".
                    "2. De itens"
                    ."\r\n".
                    "3. Aqui"
                    ."\r\n\r\n".
                    "**Texto em negrito**"
                    ."\r\n".
                    "*Texto em itálico*"
                    ."\r\n\r\n".
                    "> Aqui é o blockquote"
                    ."\r\n\r\n".
                    "[Link para o Google](https://www.google.com)"
                    ."\r\n\r\n".
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