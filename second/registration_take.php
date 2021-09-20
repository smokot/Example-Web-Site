<?php
$login = $_POST["login"];
$password_take = $_POST["password"];
$name = $_POST["name"];


include_once "../SqlLoad.php";
$query = "INSERT INTO user_data (`login_`, `password_`, `name`) VALUES ('$login','$password_take', '$name')";



mysqli_query($link, $query);



header("Location:../index.html");
exit;



?>