<?php

namespace app\Controllers;
use app\Core\View;


class PartidaController{

    private array $placar = [
        'jogador' => 0,
        'adversario' => 0
    ];

    private array $deck = [
        'jogador' => 0,
        'adversario' => 0
    ];

    private function getBaralhoJogadorSemConta()
    {   
        session_start();
        
        return $_SESSION['baralho_jogador'];
    }

    private function getBaralhoAdversario()
    {
        session_start();

        return $_SESSION['baralho_adversario'];
    }

    public function iniciarPartida()
    {
    
        $baralhoJogador = $this->getBaralhoJogadorSemConta();

        shuffle($baralhoJogador);

        return View::render('partida.twig', ['baralhoJogador' => $baralhoJogador]);
    }

    public function getCartaEAtributoAdversario()
    {
        try
        {
            $baralhoAdversario = $this->getBaralhoAdversario();

            $indexAgente = array_rand($baralhoAdversario);
    
            $agente = $baralhoAdversario[$indexAgente];
    
            $atributos = ["dano", "velocidade", "tecnologia", "radianita"];
    
            $atributoSorteado = $atributos[array_rand($atributos)];
    
            $valorSorteado =  $agente[$atributoSorteado];
    
            unset($baralhoAdversario[$indexAgente]);
    
            $_SESSION['baralho_adversario'] = $baralhoAdversario;

            $_SESSION['agente_atual_adversario'] = $agente['agente'];
            $_SESSION['atributoSorteadoAdversario'] = $atributoSorteado;
            $_SESSION['valorSorteadoAdversario'] = $valorSorteado;
            
            $response = [
                'agente' => $agente["agente"], 
                'atributoSorteado' => $atributoSorteado,
                'valorSorteado' => $valorSorteado
            ];

            header('Content-Type: application/json');
            echo json_encode($response);
    
            exit; 
        }
        catch (Exception $e)
        {
            erro_log("Erro: ".$e->getMessage());
        }
    }

    public function getJogadorVsAdversario()
    {
        $baralhoJogador = $this->getBaralhoJogadorSemConta();

        $agenteAtualAdversario = $_SESSION['agente_atual_adversario'];
        $atributoSorteadoAdversario = $_SESSION['atributoSorteadoAdversario'];
        $valorSorteadoAdversario = $_SESSION['valorSorteadoAdversario'];

        $idCard = $_GET['idCard'] ?? null;

        if(!$idCard)
        {
            $response = [
                'error' => 'idCard não informado'
            ];

            header('Content-Type: application/json');
            echo json_encode($response);

            exit;
        }

        $resultadoFiltro = array_filter($baralhoJogador, function($agente) use ($idCard){
            return $agente['id'] == $idCard;
        });

        $resultado = array_values($resultadoFiltro);

        $valorJogador = $resultado[0][$atributoSorteadoAdversario];
        $agenteJogador = $resultado[0]['agente'];

        if((int) $valorJogador == (int) $valorSorteadoAdversario){

            $messagem = "Empate!  Seu adversário escolheu o agente: {$agenteAtualAdversario} e o atributo: {$atributoSorteadoAdversario} com valor: {$valorSorteadoAdversario}.  Seu agente escolhido foi {$agenteJogador} com o valor do atributo: {$valorJogador}";

        }
        else if((int) $valorJogador > (int) $valorSorteadoAdversario){

            $messagem = "Você venceu esse round!  Seu adversário escolheu o agente: {$agenteAtualAdversario} e o atributo: {$atributoSorteadoAdversario} com valor: {$valorSorteadoAdversario}.  Seu agente escolhido foi {$agenteJogador} com o valor do atributo: {$valorJogador}";

            $this->placar['jogador'] += 1;

        } else{

            $messagem = "Você perdeu esse round :( :( Seu adversário escolheu o agente: {$agenteAtualAdversario} e o atributo: {$atributoSorteadoAdversario} com valor: {$valorSorteadoAdversario}.  Seu agente escolhido foi {$agenteJogador} com o valor do atributo: {$valorJogador}";

            $this->placar['adversario'] += 1;
        }

        $response = [
            'mensagem' => $messagem,
            'placar' => $this->placar	
        ];

        header('Content-Type: application/json');
        echo json_encode($response);

        exit;
 
    }

}
