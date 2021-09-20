<?php
include_once "../SqlLoad.php";

session_start();


$active = $_SESSION["active"];
if($active == 0){
    header("Location:../index.html");
    exit;
}


$user_id = $_SESSION["id_chel"];
$task_id = $_POST["id"];





$query = "DELETE FROM `user_tasks` WHERE `id` LIKE $task_id";

mysqli_query($link, $query);



?>
