<?php
    session_start();
    session_unset();
    setcookie("Login", $_SESSION["login"], time()-3600, "/Atividade-create/");
    setcookie("Senha", $_SESSION["senha"], time()-3600, "/Atividade-create/");
    session_destroy();
    header("location: loginInicial");
?>