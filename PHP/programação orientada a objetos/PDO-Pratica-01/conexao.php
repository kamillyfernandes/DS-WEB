<?php

    // MYSQL
    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", ""); //intanciando um objeto diretamrnte do PDO

    //var_dump($db);
    //echo "<br><br>";
    //print_r($db);

/*
    echo "<h2>Exemplo de consulta com uma linha</h2>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC); // Todos os registros retornados

    print_r($todos);
    echo "<br>";
    echo $todos['email'];

    echo "<br><br><br>";
*/

  

?>