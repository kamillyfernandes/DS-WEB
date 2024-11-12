<!DOCTYPE html> 
<html lang="en">
<head> 
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Sistema de cadastro</title> 
     <link rel="stylesheet" href="style.css ">
</head> 
</body>

    

     <form action="index.php" method="post"> 

        <h1>Sistema de cadastro</h1> 
        <br>
        <label>Nome: </label> 
        <input type="text" required id="nome" name="nome">
        <br><br>
        <label>Login: </label> 
        <input type="text" required id="login" name="login">
        <br><br>
        <label>Senha: </label> 
        <input type="password" required id="senha" name="senha"> 
        <br><br>
        <input type="submit" value="Enviar">
     </form>

 </body> 
</html>

<?php
$nomeServidor   = "localhost";
$nomedoBancoDados = "formulario";
$nomeUsuario	= "root";
$senha		= "usbw";

// Criando a conexão

$conexao = mysqli_connect($nomeServidor, $nomeUsuario, $senha, $nomedoBancoDados);


// Checando a conexão

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
echo "Conectado com Sucesso !";
mysqli_close($conexao);

?>