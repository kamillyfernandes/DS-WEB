<?php
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        echo "<script>alert('Método inválido! Apenas POST é permitido.');
              window.location.href='produto.php';</script>";
        exit;
    }

    // Capturando os dados enviados pelo formulário
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $descricao = $_POST['descricao'];

    include("conexao.php");

    try {
        // Preparando a query para atualização
        $statement = $db->prepare("UPDATE itens SET codigo = :codigo, nome = :nome, preco = :preco, estoque = :estoque, descricao = :descricao WHERE id = :id");
        $statement->bindParam(":codigo", $codigo);
        $statement->bindParam(":nome", $nome);
        $statement->bindParam(":preco", $preco);
        $statement->bindParam(":estoque", $estoque);
        $statement->bindParam(":descricao", $descricao);
        $statement->bindParam(":id", $id);

        // Executando a atualização
        if ($statement->execute()) {
            echo "<script>alert('Produto atualizado com sucesso!');
                  window.location.href='produto.php';</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o produto!');
                  window.location.href='produto.php';</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Erro no banco de dados: " . $e->getMessage() . "');
              window.location.href='produto.php';</script>";
    }
?>
