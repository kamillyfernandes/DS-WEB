<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST"){
        echo"<script>alert('Está faltando o metodo POST');
            window.location.href='cadastro.php';
            </script>"; //Redirecionamento com PHP

    };

        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $email = $_POST['email'];
        $senha   = $_POST['senha'];

        include("conexao.php");
        include("cadastroValida.php");
        
        if(validaCadastro($email, $senha)){

        
        // Preparar e executar a query com PDO corretamente
        $statement = $db->prepare("INSERT INTO administrador(nome, cargo, email, senha) VALUES (:nome, :cargo, :email, :senha)");
        $statement->bindParam(":nome", $nome);
        $statement->bindParam(":cargo", $cargo);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":senha", $senha);
        
        $statement->execute();
        }

        header("Location: cadastro.php"); //Redirecionamento com PHP
    
//id, nome, cargo, email, senha
?>


