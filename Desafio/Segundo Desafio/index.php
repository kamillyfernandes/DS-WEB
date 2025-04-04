<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
    <script src="https://kit.fontawesome.com/8403ba6cce.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu" title="Home"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="produto.php" class="meumenu" title="Produtos"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <li><a href="venda.php" class="meumenu" title="Vendas"><i class="fa-solid fa-dollar-sign"></i></a></li>
            <li><a href="consulta.php" class="meumenu" title="Consulta"><i class="fa-regular fa-clipboard"></i></a></li>
        </ul>
    </div>
    <div class="container">    
        <hr>
        <h1>Dashboard</h1>
        <p>Os gráficos e exibições de informações encontram-se em desenvolvimento, os unicos dados encontrados foram:</p>
    <?php  
        include 'conexao.php';
        echo "<h2></h2>";
        $dados = $db->query("SELECT * FROM clientes");
        echo "O sistema contem ".$dados->rowCount()." clientes cadastrados";
        
    ?>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>