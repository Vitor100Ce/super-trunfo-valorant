<?php

namespace app\Models;

use app\Models\EstruturaDbModel;


class BaralhoModel extends EstruturaDbModel
{

    public function getCartas(){

        $result = $this->conexaoDb()->query("SELECT * FROM cartas_agentes");
        $cartas = [];
    
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $cartas[] = $row; 
        }
    
        return $cartas; 

    }

    public function getBaralho($idCartas){

        $result = $this->conexaoDb()->query("SELECT * FROM cartas_agentes WHERE id IN (".implode(',', $idCartas).")");

        $baralho = [];

        while($row = $result->fetchArray(SQLITE3_ASSOC)){
            $baralho[] = $row;
        }

        return $baralho;
    }
}