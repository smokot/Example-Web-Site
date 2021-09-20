<?php
session_start();
$_SESSION["active"] = 0;


header("Location:../index.html");
exit;
?>