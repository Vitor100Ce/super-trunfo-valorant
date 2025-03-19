<?php

namespace app\Controllers;
use app\Core\View;
use app\Models\BaralhoModel;


class BaralhoController{

    public function getCartas(){

        $cartas = (new BaralhoModel)->getCartas();
       
        return View::render('montar-baralho.twig', ['cartas' => $cartas]);

    }

    public function montarBaralhoSemConta(){

        $idCartas = $_POST['selectedCards'] ?? [];

        $baralho = [];
         
    }
}
