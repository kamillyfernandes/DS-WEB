<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--CSS Estilizando a pagina-->

    <div>
        <ul>
        <li><a href="#" class="meumenu" title="Home">Home</a></li>
        <li><a href="cliente.php" class="meumenu" title="Clients">Clientes </a></li>
        <li><a href="#" class="meumenu" title="produtoss">Produtos </a></li>
        <li><a href="#" class="meumenu" title="vendas">Vendas </a></li>
        </ul>
    </div>

    <div class= "container"> <!---->
    <hr>
    <h1>Dashboar</h1>
    <p>A dashboar escontra-se em desenvolvimento, os dados processados até o momento são:</p>
 <?php
     include 'conexao.php';

        $dados = $db->query("SELECT * FROM clientes");
        echo "Quantidade de clientes cadastrados: " .$dados -> rowCount(); 
        
 ?>
                

    </div>

</body>
<script src ="script.js"></script>
</html>