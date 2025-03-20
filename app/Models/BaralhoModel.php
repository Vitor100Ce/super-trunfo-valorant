<?php

namespace app\Models;


class BaralhoModel
{

    private function conexaoDb(){

        $db = new \SQLite3('../super-trunfo-valorant.db');
        return $db;
    }


    public function getCartas(){

        $result = $this->conexaoDb()->query("SELECT * FROM cartas");
        $cartas = [];
    
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $cartas[] = $row; 
        }
    
        return $cartas; 

    }
}