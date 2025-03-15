<?php

use Pecee\SimpleRouter\SimpleRouter;
use app\Controllers\HomeController;
use app\Controllers\JogarSemContaController;
use app\Controllers\BaralhoController;

SimpleRouter::get('/', [HomeController::class, 'index']);
SimpleRouter::get('/jogar-sem-conta', [JogarSemContaController::class, 'jogarSemConta']);
SimpleRouter::get('/get-cartas', [BaralhoController::class, 'getCartas']);

