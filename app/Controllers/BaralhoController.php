<?php

namespace app\Controllers;
use app\Core\View;
use app\Models\BaralhoModel;

class BaralhoController {

    public function getCartas(){

        $cartas = (new BaralhoModel)->getCartas();
       
        return View::render('montar-baralho.twig', ['cartas' => $cartas]);

    }

    public function setBaralhoSemConta(){

        try{

            session_start();

            unset($_SESSION['baralho']);

            if(!isset($_POST['selectedCards'])){
                throw new Exception('Nenhuma carta foi selecionada');
            }

            $idCartas = $_POST['selectedCards'] ?? [];

            $baralho = (new BaralhoModel)->getBaralho($idCartas);

            $_SESSION['baralho'] = $baralho;

            return true;

        }catch (Exception $e){
            erro_log("Erro ao montar baralho: ".$e->getMessage());
            return false;
        }

    }
}
