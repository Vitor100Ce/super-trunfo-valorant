<?php

namespace app\Controllers;
use app\Core\View;

class BaralhoController{

    public function getCartas(){

        $cartas = [

            [ 
                'id'=> 1, 
                'agente' => 'Brimstone', 
                'img' => '\images\brimstone.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ],
            [ 
                'id'=> 2, 
                'agente' => 'Cypher', 
                'img' => '\images\cypher.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ],
            [ 
                'id'=> 2, 
                'agente' => 'Killjoy', 
                'img' => '\images\killjoy.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ],
            [ 
                'id'=> 2, 
                'agente' => 'Phoenix', 
                'img' => '\images\phoenix.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ],
            [ 
                'id'=> 2, 
                'agente' => 'Sage', 
                'img' => '\images\sage.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ],
            [ 
                'id'=> 2, 
                'agente' => 'Sova', 
                'img' => '\images\sova.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ],
            [ 
                'id'=> 2, 
                'agente' => 'Viper', 
                'img' => '\images\viper.png', 
                'dano' => 10,
                'velocidade' => 10,
                'tecnologia' => 15,
                'radianita' => 8
            ]
        ];

        return View::render('montar-baralho.twig', ['cartas' => $cartas]);

    }

    public function montarBaralho(){

        $baralho = [];

         
    }
}
