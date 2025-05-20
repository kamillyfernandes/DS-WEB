<?php
$subRota = $caminho[1] ?? null; //Verifica se há algo na segunda rota

switch($subRota){
    case '':
        if (count($_POST) > 0 && isset($_FILES['fotoUsuario'])){ //se tiver post ou file
            /*var_dump($_POST); 
            var_dump($_FILES); //dados dos arquivos */
            extract($_POST);
            require_once './models/usuario.php';
            $usuario = new Usuario;
            $usuario->atualizaCadastro(
                [
                ':nomeUsuario' => $nomeUsuario,
                ':emailUsuario' => $emailUsuario, 
                ':senhaUsuario' => $senhaUsuario],
            $_FILES
            );

        }

        require_once './models/usuario.php'; //recrie esse documento apenas uma vez
        $usuario = new Usuario;
        $dados = $usuario->queryOne([':idUsuario' => 1]);
        require './views/usuarios/usuario.php';
        break;

    default:
        echo "404 - Página não encontrada";
        break;
}