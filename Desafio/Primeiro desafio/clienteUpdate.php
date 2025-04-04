<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST"){
        echo"<script>alert('Está faltando o metodo POST');
            window.location.href='cliente.php';
            </script>"; //Redirecionamento com PHP

    };


 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $observacao = $_POST['observacao'];
        $id = $_GET["id"];

        include("conexao.php");

        // Preparar e executar a query com PDO corretamente
        $statement = $db->prepare("UPDATE clientes SET nome=:nome, email=:email, observacao=:observacao WHERE id = :id");
        $statement->bindParam(":nome", $nome);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":observacao", $observacao);
        $statement->bindParam(":id", $id);
        
        $statement->execute();

        header("Location: cliente.php"); //Redirecionamento com PHP
    

?>