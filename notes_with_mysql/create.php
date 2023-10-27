<?php



$Connection =require_once("connection.php");

$id = $_POST['id'] ?? '';

if($id){
    $Connection->updateNote($id,$_POST);
}else{
    $Connection->addNote($_POST);
}

header("location: main.php");