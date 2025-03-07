<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class= "container"> <!---->
        <div class= "formulario"> <!--Div para o formulario-->

            <form action= "insertion.php" method="POST" > <!--formulario enviando para insertion.php por POST=metodo mais seguro pois fica oculto-->
                <label for="">Nome: </label>
                <input type="text" name="nome">
                <br><br>
                <label for="">E-mail: </label>
                <input type="text" name="email"> 
                <br><br>
                <input type="Submit">

                <?php

        include 'conexao.php';


        echo "<h2>Exibindo: </h2>";
        //Exemplo de consulta com muitas linhas
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO:: FETCH_ASSOC); // Todos os registros retornados
        foreach($todos as $linha){ //percorendo cada linha da tabela clientes
            $idCliente = $linha ['id'];
            $nomeCliente = $linha ['nome'];
            $emailCliente = $linha ['email'];

            //echo "Linha: ".$idCliente . "<br>";
            echo "Nome: ".$nomeCliente . "<br>";
            echo "E-mail: ".$emailCliente . "<br>";
            echo "<a href='update.php?id=$idCliente'>Editar Cliente</a>";
            echo "<br>";
            echo "<a href='delete.php?id=$idCliente'>Deletar Cliente</a>";
            echo "<br><br><br>";
        
        }
    ?>
                
            </form>

        </div> 
    </div>

</body>
</html>