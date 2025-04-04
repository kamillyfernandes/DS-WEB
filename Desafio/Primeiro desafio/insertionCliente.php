<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST"){
        echo"<script>alert('Está faltando o metodo POST');
            window.location.href='cliente.php';
            </script>"; //Redirecionamento com PHP

    };


 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $observacao = $_POST['observacao'];

        include("conexao.php");

        // Preparar e executar a query com PDO corretamente
        $statement = $db->prepare("INSERT INTO clientes(nome, email, observacao) VALUES (:nome, :email, :observacao)");
        $statement->bindParam(":nome", $nome);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":observacao", $observacao);
        
        $statement->execute();

        header("Location: cliente.php"); //Redirecionamento com PHP
    

?>