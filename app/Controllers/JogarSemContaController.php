<?php

namespace app\Controllers;

use app\Core\View;

class JogarSemContaController{
    public function jogarSemConta(){
        return View::render('jogar-sem-conta.twig');
    }
}