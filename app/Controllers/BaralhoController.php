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

            unset($_SESSION['baralho_jogador']);
            unset($_SESSION['baralho_adversario']);


            if(!isset($_POST['selectedCards'])){
                throw new Exception('Nenhuma carta foi selecionada');
            }

            $idCartas = $_POST['selectedCards'] ?? [];

            $baralhoJogador = (new BaralhoModel)->getBaralhoJogador($idCartas);
            $baralhoAdversario = (new BaralhoModel)->getBaralhoAdversario();

            $_SESSION['baralho_jogador'] = $baralhoJogador;
            $_SESSION['baralho_adversario'] = $baralhoJogador;

            return true;

        }catch (Exception $e){
            erro_log("Erro ao montar baralho: ".$e->getMessage());
            return false;
        }

    }
}
