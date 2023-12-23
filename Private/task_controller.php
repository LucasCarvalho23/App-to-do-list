<?php 

    require "../Private/model_task.php";
    require "../Private/service_task.php";
    require "../Private/conection.php";

    $task = new Task();
    $task->__set('task',$_POST['description']);

    $conection = new Conection();

    $serviceTask = new ServiceTask($conection, $task);
    $serviceTask->create();

    header('Location: new_tasks.php?inclusion=1');

?>