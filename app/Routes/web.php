<?php

use Pecee\SimpleRouter\SimpleRouter;
use app\Controllers\HomeController;
use app\Controllers\JogarSemContaController;

SimpleRouter::get('/', [HomeController::class, 'index']);
SimpleRouter::get('/jogar-sem-conta', [JogarSemContaController::class, 'jogarSemConta']);
