<?php 

    class Conection {

        private $host = 'localhost';
        private $dbname = 'db_todolist';
        private $user = 'root';
        private $password = '';

        public function conection() {

            try {

                $conection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);

                return $conection;

            } catch (PDOException $e) {
                echo '<p>'.$e->getMessage().'</p>';
            }

        }

    }

?>