<?php

namespace app\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    public static function render(string $template, array $data = [])
    {
        $loader = new FilesystemLoader(__DIR__ . '/../Views');
        $twig = new Environment($loader);

        echo $twig->render($template, $data);
    }
}
