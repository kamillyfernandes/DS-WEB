<?php

    //MySQL
    $db = new PDO ("mysql:host=localhost; dbname=produto", "root", "");

    //var_dump($db);
    //echo "<br><br>";
    //print_r($db);

    /*
    echo "<h1>Exemplo de consulta com uma linha</h1>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados
    print_r ($todos);
    echo "<br>";
    echo $todos["email"];

    echo "<br><br><br>";



    echo "<h2>Inserindo dados</h2>";

    
    $statement= $db->prepare("INSERT INTO clientes(nome, email) VALUES (?,?)");

    $statement->execute(array("Attina", "attina@gmail.com"));
    $statement->execute(array("Tom Mate", "tommate@gmail.com"));
    $statement->execute(array("Pacheco", "pacheco@gmail.com"));
    */

   

?>