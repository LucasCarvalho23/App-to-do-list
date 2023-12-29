<?php 

    require "../Private/model_task.php";
    require "../Private/service_task.php";
    require "../Private/conection.php";

    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    if ( $action == 'insert' ) {

        $task = new Task();
        $task->__set('task',$_POST['description']);
    
        $conection = new Conection();
    
        $serviceTask = new ServiceTask($conection, $task);
        $serviceTask->create();
    
        header('Location: new_tasks.php?inclusion=1');

    } else if ($action == 'recover') {

        $task = new Task();
        $conection = new Conection();

        $serviceTask = new ServiceTask($conection, $task);
        $tasks = $serviceTask->read();
       
    } else if ($action == 'update') {

        $task = new Task();
        $task->__set('id', $_POST['id'])->__set('task', $_POST['task']);

        $conection = new Conection();
        $serviceTask = new ServiceTask($conection, $task);

        if ($serviceTask->update()) {
            header('Location: all_tasks.php');
        }

    }

?>