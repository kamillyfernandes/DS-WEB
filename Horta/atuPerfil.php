<?php

if(count($_POST) > 0 && isset($_FILES['fotoUsuario'])){
    extract($_POST);
    require_once 'usuario.php';
    $usuario = new Usuario;
    $usuario->atualizaCadastro([':nome' => $nomeUsuario, ':email' => $emailUsuario, ':senha' => $senhaUsuario], $_FILES);
    header("location: perfil.php");
    
}