<?php
$login = $_POST["login"];
$passworder = $_POST["password"];
//echo $login;
//echo $password;
include_once "../SqlLoad.php";
$query = "SELECT * FROM `user_data`";

$res = mysqli_query($link, $query);


$counter=0;

while($row = mysqli_fetch_assoc($res))
{
    $counter++;

    if($row["login_"] == $login && $row["password_"]==$passworder){
      
        session_start();
        $_SESSION["id_chel"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["active"] = 1;
        $_SESSION["loginer"] = $login;
        $_SESSION["passworder"] = $passworder;

        header("Location:../personal_page.php");
        exit;
    }

}
header("Location:../index_error.html");
exit;
?>