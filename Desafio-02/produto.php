<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg">
    <link rel="stylesheet" href="./assets/style/style.css">
    <title>StoreCloth</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="cliente.php" class="meumenu" title="Clientes">Clientes </a></li>
            <li><a href="produto.php" class="meumenu meumenu-active" title="Produtos">Produtos</a></li>
        </ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertionProduto.php" method="POST" name="formulario" onsubmit="return validarDadosProdutos()">
                <label for="codigo">Código do Produto: </label>
                <input type="number" name="codigo" id="codigo" placeholder="Insira o código do produto">
                <p class="erro-input" id="erro-codigo"></p>

                <label for="nome">Nome do Produto: </label>
                <input type="text" name="nome" id="nome" placeholder="Insira o nome do produto">
                <p class="erro-input" id="erro-nome"></p>

                <label for="preco">Preço: </label>
                <input type="number" step="0.01" name="preco" id="preco" placeholder="Insira o preço">
                <p class="erro-input" id="erro-preco"></p>

                <label for="estoque">Estoque: </label>
                <input type="number" name="estoque" id="estoque" placeholder="Insira o estoque">
                <p class="erro-input" id="erro-estoque"></p>

                <label for="descricao">Descrição do produto:</label>
                <textarea name="descricao" cols="30" rows="4" id="descricao" placeholder="Insira a descrição do produto"></textarea>
                <p class="erro-input" id="erro-descricao"></p>
                <input type="submit" value="Cadastrar Produto">
            </form>
        </div>

        <br>
        <table id="produto">
            <br>
            <tr>
                <th>Código do Produto</th>
                <th>Nome</th>
                <th>Estoque</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php
            include 'conexao.php';

            try {
                $dados = $db->query("SELECT * FROM itens");
                $todos = $dados->fetchAll(PDO::FETCH_ASSOC);

                foreach($todos as $linha) {
                    $idProduto = $linha['id'];
                    $codigoProduto = $linha['codigo'];
                    $nomeProduto = $linha['nome'];
                    $estoqueProduto = $linha['estoque'];
                    $precoProduto = $linha['preco'];
                    $descricaoProduto = $linha['descricao'];

                    echo "
                    <tr>
                        <td>$codigoProduto</td>
                        <td>$nomeProduto</td>
                        <td>$estoqueProduto</td>
                        <td>R$ " . number_format($precoProduto, 2, ',', '.') . "</td>
                        <td>$descricaoProduto</td>
                        <td><a class='lapis' href='ProdutoAlteracao.php?id=$idProduto'><i class='fa-solid fa-pencil'></i></a></td>
                        <td><a class='lixo' href='deleteProduto.php?id=$idProduto'><i class='fa-solid fa-trash'></i></a></td>
                    </tr>
                    ";
                }
            } catch (PDOException $e) {
                echo "Erro ao buscar produtos: " . $e->getMessage();
            }
            ?>
        </table>
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/9cf5ced05f.js" crossorigin="anonymous"></script>
</html>
