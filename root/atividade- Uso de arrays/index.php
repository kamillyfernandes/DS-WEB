<?php


/*Criando  uma array simples de frutas contendo pelo menos cinco itens.*/ 
    echo"<h4>Array simples: </h4>";
    $frutas = array ('Morango', 'Kiwi', 'Uva','Pessego', 'Manga' ); //criando "gaveta" para as frutas

    foreach($frutas as $sabor){ //adicionando título (as=vai passar frutas para sabor)
        echo "Frutas: " . $sabor . "<br>"; //printando ele 
    }


    echo "<br>" . "<br>" . "<br>"; // Quebra linha ("." = serve como virgula para acresentar coisas 


    /*Adicione um novo elemento ao array.*/ 
    echo"<h4>Adcionando item: </h4>";
    array_push($frutas, 'Maçã'); //adicionando item ao fim da lista
    foreach($frutas as $sabor){ //ptintando depois de adicionar mais um intem
        echo "Frutas: " . $sabor . "<br>"; //print 
    }


    echo "<br>" . "<br>" . "<br>"


    /* Ordene o array em ordem alfabética.*/
    echo "<h4>ordenado ordem alfabética</h4>";
    sort ($frutas); //ordena em ordem alfabetica
    foreach($frutas as $sabor){ //ptintando depois de adicionar mais um intem
        echo "Frutas: " . $sabor . "<br>"; //print 
    }
?>