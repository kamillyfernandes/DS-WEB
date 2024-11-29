<?php
session_start();

$_SESSION['nome']='bruno';
$_SESSION['idade']='36';
$_SESSION['altura']='1,72';
$_SESSION['email']='bruno@bruno.com';
$_SESSION['horario-login']= time();


echo 'variavel criada com sucesso!';
?>

