<?php


/*Criando  uma array simples de frutas contendo pelo menos cinco itens.*/ 

    $frutas = array ('Morango', 'Kiwi', 'Uva','Pessego', 'Manga' ); //criando "gaveta" para as frutas

    foreach($frutas as $sabor){ //adicionando título (as=vai passar frutas para sabor)
        echo "Frutas" . $sabor . "<br>" //printando ele 
    }

    echo "<br>" . "<br>" . "<br>" // Quebra linha ("." = serve como virgula para acresentar coisas )

?>