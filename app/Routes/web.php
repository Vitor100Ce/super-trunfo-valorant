<?php

use Pecee\SimpleRouter\SimpleRouter;
use app\Controllers\HomeController;
use app\Controllers\JogarSemContaController;
use app\Controllers\BaralhoController;
use app\Controllers\PartidaController;

SimpleRouter::get('/', [HomeController::class, 'index']);
SimpleRouter::get('/jogar-sem-conta', [JogarSemContaController::class, 'jogarSemConta']);
SimpleRouter::get('/get-cartas', [BaralhoController::class, 'getCartas']);
SimpleRouter::post('/montar-baralho-sem-conta', [BaralhoController::class, 'setBaralhoSemConta']);
SimpleRouter::get('/partida', [PartidaController::class, 'iniciarPartida']);
SimpleRouter::get('/get-carta-e-atributo-adversario', [PartidaController::class, 'getCartaEAtributoAdversario']);
SimpleRouter::get('/jogador-vs-adversario', [PartidaController::class, 'getJogadorVsAdversario']);








