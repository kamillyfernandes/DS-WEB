<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg">
    <title>StoreCloth - Home</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu meumenu-active" title="home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes </a></li>
            <li><a href="produto.php" class="meumenu" title="Produtos">Produtos</a></li>

        </ul>
    </div>
    <div class="container">
        <hr>
        <h1>Bem-vindo à StoreCloth!</h1>
        <p>Aqui, moda e estilo se encontram para transformar o seu guarda-roupa! ✨</p>
        <p>Descubra peças exclusivas, cheias de personalidade e qualidade, que valorizam o seu estilo único. 
           Do básico ao sofisticado, nossa coleção foi pensada para quem não abre mão de conforto e autenticidade.</p>

        <h3>🌟 Destaques da StoreCloth:</h3>
        <ul class="topicos">
            <li>• Tendências atuais e atemporais.</li>
            <br>
            <li>• Roupas que combinam estilo e conforto.</li>
            <br>
            <li>• Preços acessíveis para todos os bolsos.</li>
            <br>
            <li>• Qualidade garantida em cada peça.</li>
        </ul>
        <p>Vem ser fashion com a gente! Explore nossa coleção e encontre o look perfeito para você.</p>

        <hr>
        <?php
            include "conexao.php";
            $dados = $db->query("SELECT * FROM itens WHERE id");
            echo "<p>Quantidade de Produtos: ".$dados->rowCount()."</p>";
        ?>
        <?php
            include "conexao.php";
            $dados = $db->query("SELECT * FROM clientes WHERE id");
            echo "<p>Quantidade de clientes: ".$dados->rowCount()."</p>";
        ?>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>
