<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST"){
        echo"<script>alert('Está faltando o metodo POST');
            window.location.href='produto.php';
            </script>"; //Redirecionamento com PHP

    };

        
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];
        $descricao = $_POST['descricao'];


        include("conexao.php");

        // Preparar e executar a query com PDO corretamente
        $statement = $db->prepare("INSERT INTO itens(codigo, nome, preco, estoque, descricao) VALUES (:codigo, :nome, :preco, :estoque, :descricao)");
        $statement->bindParam(":codigo", $codigo);
        $statement->bindParam(":nome", $nome);
        $statement->bindParam(":preco", $preco);
        $statement->bindParam(":estoque", $estoque);
        $statement->bindParam(":descricao", $descricao);
        $statement->execute();

        header("Location: produto.php"); //Redirecionamento com PHP
    

?>