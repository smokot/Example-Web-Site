<?php
include_once "../SqlLoad.php";

session_start();


$active = $_SESSION["active"];
if($active == 0){
    header("Location:../index.html");
    exit;
}


$user_id = $_SESSION["id_chel"];
$task_name = $_POST["task_name"];





$query = "INSERT INTO user_tasks (`task_name`, `user_id`) VALUES ('$task_name', '$user_id')";

mysqli_query($link, $query);


?>
