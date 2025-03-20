<?php

namespace app\Controllers;
use app\Core\View;


class PartidaController{

    public function iniciarPartida(){
    
        session_start();
        
        $baralho = $_SESSION['baralho'];

        return View::render('partida.twig', ['baralho' => $baralho]);
    
    }
}
