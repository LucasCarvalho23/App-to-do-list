<?php 

    class Task {
        
        private $id;
        private $id_status;
        private $task;
        private $data_register;

        public function __get($attribute) {
            return $this->$attribute;
        }

        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }

    }

?>