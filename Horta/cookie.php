<?php
session_start();
setcookie("Login", $_SESSION["login"], time()+3600, "/Atividade-create/");
setcookie("Senha", $_SESSION["senha"], time()+3600, "/Atividade-create/");
header("location: home.php");
?>