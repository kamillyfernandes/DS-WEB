<?php

    $id = 5; //escolehndo a linha do id quero deletar

    include "conexao.php";//ligaçao com banco de dados

    //stmt = preparação
    $stmt = $db->prepare("DELETE FROM clientes WHERE id = :id"); //db=banco de dados, ele esta preparando, para deletar um cliente pelo o id dele
    $stmt->bindParam(':id', $id); //dentro dela cria 
    $stmt->execute(); //executa pegando comando e jogando no banco

    if ($stmt->rowCount() > 0){ 
        echo "Deletou ".$stmt->rowCount()." linhas";
    }else{
        echo "Não deletou nenhuma linha";
    }

    header("Location: cliente.php"); //voltando para index.php
?>