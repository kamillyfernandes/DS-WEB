<?php
    session_start();
?>
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
        <div class="carrinho">
            <div><h2>Carrinho de compras</h2></div>
            <p id="aviso"></p>
            <p id="dadosCliente">Cliente: </p>
            <table id="tabelaCarrinho"></table>
            <div id="rodapeCarrinho"></div>
        </div>
    <?php  
        include 'conexao.php';

        echo "<h4>Selecione um cliente</h4>";
        $dados = $db->query("SELECT * FROM clientes");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        echo "<table id='clientes'>";
        echo "
            <tr>
                <th>Selecione</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Observacao</th>
                <th>Editar</th>
            </tr>
        ";
        foreach($todos as $linha){
            extract($linha);
            echo "<tr>";
            echo "<td><i onclick=\"selecionaCliente($id,'$nome')\" class='fa-solid fa-user-plus'></i></td>";
            echo "<td>".$nome."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$observacao."</td>";
            echo "<td><a href='clientesAlteracao.php?id=$id'><i class='fa-solid fa-pencil'></i></a></td>";
            echo "</tr>";
        }
        echo "</table>";


        /* ==================== FIM DO CLIENTE E INICIO DO PRODUTO ==================== */

        echo "<h4>Selecione os Produtos</h4>";
        $dados = $db->query("SELECT * FROM produtos");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        echo "<table id='produtos'>";
        echo "
            <tr>
                <th>Selecione</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th>Editar</th>
            </tr>
        ";
        foreach($todos as $linha){
            extract($linha);
            echo "<tr>";
            echo "<td><i onclick=\"selecionaProduto($id,'$nome', $codigo, $estoque, $preco)\" class='fa-solid fa-cart-plus'></i></td>";
            echo "<td>".$codigo."</td>";
            echo "<td>".$nome."</td>";
            echo "<td>".$estoque."</td>";
            echo "<td>".$preco."</td>";
            echo "<td><a href='produtoAlteracao.php?id=$id'><i class='fa-solid fa-pencil'></i></a></td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
    </div>
</body>
<script src="./assets/js/venda.js"></script>
<script src="https://kit.fontawesome.com/8403ba6cce.js" crossorigin="anonymous"></script>
</html>