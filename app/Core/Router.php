<?php

namespace app\Core;

use Pecee\SimpleRouter\SimpleRouter;

class Router
{
    public static function start()
    {
        // Importar as rotas definidas no arquivo web.php
        require_once __DIR__ . '/../Routes/web.php';

        // Iniciar o roteamento
        SimpleRouter::start();
    }
}