<?php

$subRota = $caminho[1] ?? null; // Verifica se há algo na segunda rota

require_once './models/produto.php'; // Carrega o model uma vez

switch ($subRota) {
    case '': // Página principal de produtos (listar e tratar inserção simples direto)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nomeProduto'], $_POST['precoProduto'], $_POST['quantidadeProduto'])) {
                $dadosProduto = [
                    'nome' => trim($_POST['nomeProduto']),
                    'preco' => trim($_POST['precoProduto']),
                    'quantidade' => trim($_POST['quantidadeProduto'])
                ];

                $produto = new Produto;
                $resultado = $produto->inserirProduto($dadosProduto);

                if ($resultado['status']) {
                    header('Location: /produtos');
                    exit;
                } else {
                    foreach ($resultado['erros'] as $erro) {
                        echo "<p style='color:red;'>Erro: $erro</p>";
                    }
                }
            } else {
                echo "<p style='color:red;'>Dados incompletos no formulário.</p>";
            }
        }

        $produto = new Produto;
        $dados = $produto->queryAll();
        require './views/produtos/consultaProdutos.php';
        break;

    case 'cadastro':
        $produto = new Produto;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nomeProduto'], $_POST['precoProduto'], $_POST['quantidadeProduto'])) {
                $dados = [
                    'nome' => trim($_POST['nomeProduto']),
                    'preco' => trim($_POST['precoProduto']),
                    'quantidade' => trim($_POST['quantidadeProduto'])
                ];

                $resultado = $produto->inserirProduto($dados);

                if ($resultado['status']) {
                    header('Location: /produtos');
                    exit;
                } else {
                    foreach ($resultado['erros'] as $erro) {
                        echo "<p style='color:red;'>$erro</p>";
                    }
                }
            }
        }

        // Se não for POST ou se deu erro, exibe o formulário novamente
        require './views/produtos/cadastroProduto.php';
        break;

        default:
        if (preg_match('/^produto\/([0-9]+)$/', $url, $matches)) {
            $id = $matches[1];

            require './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryOne([":idProduto" => $id]);
            require './views/produtos/consultaProduto.php';

        }
        break;
}