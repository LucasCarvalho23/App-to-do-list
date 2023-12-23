<?php 

    class ServiceTask {

        private $conection;
        private $task;

        public function __construct(Conection $conection, Task $task) {
            $this->conection = $conection->conection();
            $this->task = $task;
        }

        public function create() {
            $query = 'insert into tb_tasks(task)values(:task)';
            $stmt = $this->conection->prepare($query);
            $stmt->bindValue(':task', $this->task->__get('task'));
            $stmt->execute();
        }

        public function read() {

        }

        public function update() {

        }

        public function delete() {

        }



    }

?>