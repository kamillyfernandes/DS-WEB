<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg">
    <title>Business System - Produto</title>
</head>
<body>
    <div class="menu">
    <ul>
        <li><a href="produto.php" class="meumenu" title="Produtos">Produtos</a></li>

    </ul>
    </div>
    <div class="container">
        <hr>
        <?php
        if($_SERVER["REQUEST_METHOD"] != "GET" || !isset($_GET["id"])){
            header("Location: produto.php");
        };
        include "conexao.php";



        $id= $_GET["id"];
        $stmt = $db->prepare("SELECT * FROM itens WHERE id = :id"); 
        $stmt ->bindParam(":id",$id);
        $stmt ->execute();

        $dados = $stmt->fetch(PDO::FETCH_ASSOC); //Todos os registros retornados

            
            $idProduto = $dados['id'];
            $codigoProduto = $dados['codigo'];
            $nomeProduto= $dados['nome'];
            $precoProduto= $dados['preco']; 
            $estoqueProduto = $dados["estoque"];
            $descricaoProduto= $dados['descricao']; 
    
        ?>
        <div class="formulario">
        <form action="produtoUpdate.php" method="POST" name="formulario" onsubmit="return validarDadosProdutos()">
    <input type="hidden" name="id" value="<?=$idProduto;?>">
    
    <label for="codigo">Código do Produto: </label>
    <input type="number" name="codigo" id="codigo" value="<?=$codigoProduto;?>" placeholder="Insira o código do produto">
    <div id="erro-codigo" class="erro"></div> <!-- Mensagem de erro -->
    
    <label for="nome">Nome do Produto: </label>
    <input type="text" name="nome" id="nome" value="<?=$nomeProduto;?>" placeholder="Insira o nome do produto">
    <div id="erro-nome" class="erro"></div> <!-- Mensagem de erro -->

    <label for="preco">Preço: </label>
    <input type="number" step="0.01" name="preco" id="preco" value="<?=$precoProduto;?>" placeholder="Insira o preço">
    <div id="erro-preco" class="erro"></div> <!-- Mensagem de erro -->

    <label for="estoque">Estoque: </label>
    <input type="number" name="estoque" id="estoque" value="<?=$estoqueProduto;?>" placeholder="Insira o estoque">
    <div id="erro-estoque" class="erro"></div> <!-- Mensagem de erro -->

    <label for="descricao">Descrição do produto:</label>
    <textarea name="descricao" cols="30" rows="4" id="descricao"><?=$descricaoProduto;?></textarea>
    <div id="erro-descricao" class="erro"></div> <!-- Mensagem de erro -->

    <input type="submit" value="Atualizar Produto">
</form>


        </div>
    

    

    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/2505969ee9.js" crossorigin="anonymous"></script>
</html>