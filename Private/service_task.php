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
            $query = '
                select 
                    t.id, s.status, t.task 
                from 
                    tb_tasks as t
                    left join tb_status as s on (t.id_status = s.id)
            ';
            $stmt = $this->conection->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function update() {
            $query = 'update tb_tasks set task = ? where id = ?';
            $stmt = $this->conection->prepare($query);
            $stmt->bindValue(1, $this->task->__get('task'));
            $stmt->bindValue(2, $this->task->__get('id'));
            return $stmt->execute();
        }

        public function remove() {
            $query = 'delete from tb_tasks where id = :id';
            $stmt = $this->conection->prepare($query);
            $stmt->bindValue(':id', $this->task->__get('id'));
            $stmt->execute();
        }

        public function accomplished() {
            $query = 'update tb_tasks set id_status = ? where id = ?';
            $stmt = $this->conection->prepare($query);
            $stmt->bindValue(1, $this->task->__get('id_status'));
            $stmt->bindValue(2, $this->task->__get('id'));
            return $stmt->execute();
        }

        public function recoverPendingTasks() {
            $query = '
                select 
                    t.id, s.status, t.task 
                from 
                    tb_tasks as t
                    left join tb_status as s on (t.id_status = s.id)
                where
                    t.id_status = :id_status
            ';
            $stmt = $this->conection->prepare($query);
            $stmt->bindValue(':id_status', $this->task->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }


    }

?>