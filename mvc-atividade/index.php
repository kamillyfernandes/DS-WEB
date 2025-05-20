<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc-atividade/assets/css/style.css">
    <title>Scudttina MVC</title>
</head>
<body>
    <div>
        <ul>
        <li><a class="active" href="/mvc-atividade/home">Home</a></li>
        <li><a href="/mvc-atividade/produto">Produtos</a></li>
        <li><a href="/mvc-atividade/cliente">Clientes</a></li>
        <li class="link-usuario"><a href="/mvc-atividade/usuario">Usuario</a></li>
        </ul>
    </div>

    <div class="container">
        <?php
            $url = $_GET['url'] ?? '/';

            require 'rotas.php';
        ?>
    </div>
    
</body>
</html>