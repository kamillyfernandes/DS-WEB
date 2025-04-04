<?php
    session_start();
    include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business System - Vendas</title>
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
    <div class="tabela-container">
        <hr>
        <h2>Consulta de Vendas</h2>
        <table id='consulta'>
            <tr>
                <th>ID Venda</th>
                <th>Data da Venda</th>
                <th>ID Cliente</th>
                <th>Cliente</th>
                <th>Produtos Vendidos</th>
                <th>Total da Venda</th>
            </tr>
            <?php
                $dados = $db->query("SELECT id, dataVenda, idCliente FROM vendas");
                $todas_vendas = $dados->fetchAll(PDO::FETCH_ASSOC);

                foreach ($todas_vendas as $venda) {
                    // Buscar nome do cliente
                    $queryCliente = $db->prepare("SELECT nome FROM clientes WHERE id = ?");
                    $queryCliente->execute([$venda['idCliente']]);
                    $cliente = $queryCliente->fetch(PDO::FETCH_ASSOC);
                    $nomeCliente = $cliente['nome'] ?? 'Desconhecido';

                    echo "<tr>
                            <td>{$venda['id']}</td>
                            <td>{$venda['dataVenda']}</td>
                            <td>{$venda['idCliente']}</td>
                            <td>{$nomeCliente}</td>";
                    
                    // Buscar os produtos vendidos
                    $queryProdutos = $db->prepare("SELECT idProduto, quantidade, preco FROM produtosvendidos WHERE idVenda = ?");
                    $queryProdutos->execute([$venda['id']]);
                    $produtosVendidos = $queryProdutos->fetchAll(PDO::FETCH_ASSOC);
                    
                    $lista_produtos = "";
                    $total_venda = 0;
                    foreach ($produtosVendidos as $produtoVendido) {
                        $queryProduto = $db->prepare("SELECT nome FROM produtos WHERE id = ?");
                        $queryProduto->execute([$produtoVendido['idProduto']]);
                        $produto = $queryProduto->fetch(PDO::FETCH_ASSOC);
                        $nomeProduto = $produto['nome'] ?? 'Produto Desconhecido';

                        $subtotal = $produtoVendido['quantidade'] * $produtoVendido['preco'];
                        $total_venda += $subtotal;
                        $lista_produtos .= "$nomeProduto (Qtd: {$produtoVendido['quantidade']}, Preço: R$" . number_format($produtoVendido['preco'], 2, ',', '.') . ")<br>";
                    }
                    
                    echo "<td>$lista_produtos</td>
                        <td>R$" . number_format($total_venda, 2, ',', '.') . "</td>
                        </tr>";
                }
            ?>
        </table>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>
<?php
    session_unset();
?>
