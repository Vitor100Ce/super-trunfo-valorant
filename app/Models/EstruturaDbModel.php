<?php

    namespace app\Models;

    class EstruturaDbModel {

        protected function conexaoDb(){

            $db = new \SQLite3('../super-trunfo-valorant.db');
            return $db;
        }

        private function setTodasTabelaCartas(){

            $this->conexaoDb()->exec(

                "CREATE TABLE IF NOT EXISTS cartas_agentes (
                id INTEGER PRIMARY KEY,
                agente TEXT,
                img TEXT,
                dano INTEGER,
                velocidade INTEGER, 
                tecnologia INTEGER,
                radianita INTEGER)"
            );

        }

        public function setTodasCartas(){

            $this->setTodasTabelaCartas();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Brimstone', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\brimstone.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 70, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 40, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 75, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Phoenix', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\phoenix.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 55, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 25, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 80, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Sage', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\sage.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 25, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 40, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 30, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 75, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Sova', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\sova.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 55, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Viper', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\viper.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 55, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Cypher', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\cypher.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 55, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Reyna', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\reyna.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 55, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Killjoy', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\killjoy.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 16, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 75, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 16, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 80, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Breach', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\breach.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 22, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 70, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 16, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Omen', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\omen.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 22, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 70, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 16, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Jett', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\jett.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 22, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 70, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 16, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Raze', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\raze.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 100, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 95, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 70, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 85, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Skye', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\skye.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 15, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 50, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 50, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 19, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Yoru', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\yoru.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 10, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 10, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 15, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 8, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Astra', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\astra.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 10, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 10, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 15, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 8, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Kay/O', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\kayo.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 15, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 50, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 50, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 19, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Chamber', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\chamber.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 16, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 75, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 16, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 80, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Neon', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\Neon.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 17, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 100, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 10, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 95, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Fade', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\fade.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 10, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 16, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 15, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 8, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Harbor', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\harbor.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 78, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 100, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 98, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 60, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Gekko', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\gekko.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 60, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 75, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 15, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Deadlock', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\deadlock.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 95, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 100, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 15, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 15, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Iso', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\iso.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 100, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 90, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 10, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Clove', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\clove.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 25, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 85, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 50, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Vyse', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\vyse.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 19, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 80, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 25, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 16, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Tejo', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\tejo.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 40, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 50, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 60, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 70, SQLITE3_INTEGER);
            $stmt->execute();

            $stmt = $this->conexaoDb()->prepare("INSERT INTO cartas_agentes (agente, img, dano, velocidade, tecnologia, radianita) VALUES (:agente, :img, :dano, :velocidade, :tecnologia, :radianita)");
            $stmt->bindValue(':agente', 'Waylay', SQLITE3_TEXT);
            $stmt->bindValue(':img', '\images\waylay.png', SQLITE3_TEXT);
            $stmt->bindValue(':dano', 40, SQLITE3_INTEGER);
            $stmt->bindValue(':velocidade', 65, SQLITE3_INTEGER);
            $stmt->bindValue(':tecnologia', 70, SQLITE3_INTEGER);
            $stmt->bindValue(':radianita', 20, SQLITE3_INTEGER);
            $stmt->execute();

            $this->conexaoDb()->close();

        }   

    }
