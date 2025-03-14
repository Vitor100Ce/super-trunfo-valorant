<?php

use Pecee\SimpleRouter\SimpleRouter;
use app\Controllers\HomeController;

// Rota para a página inicial
SimpleRouter::get('/', [HomeController::class, 'index']);