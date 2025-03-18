<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg">
    <title>Business System - Cliente</title>
</head>
<body>
    <div class="menu">
    <ul>
        <li><a href="index.php" class="meumenu" title="home">Home</a></li>
        <li><a href="cliente.php" class="meumenu meumenu-active" title="Clientes">Clientes </a></li>
        <li><a href="produto.php" class="meumenu" title="Produtos">Produtos</a></li>
    </ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
            <form action="insertionCliente.php" method="POST" name="formulario" onsubmit=" return validarDadosCliente()">

                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome"  placeholder="insira seu nome">
                <p class="erro-input" id="erro-nome"></p>


                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email"  placeholder="Ex:xxx@gmail.com">
                <p class="erro-input" id="erro-email"></p>


                <label for="observacao">Observação do Cliente:</label>
                <textarea name="observacao" id="" cols="30" rows="4" id="observacao"  placeholder="insira sua observação"></textarea>
                <p class="erro-input" id="erro-observacao"></p>


                <input type="Submit">

            </form>
        </div>
    

    <table id="clientes">
        <br>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Observação</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    
    <?php
        include "conexao.php";




        $dados = $db->query("SELECT * FROM clientes WHERE id");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
        foreach($todos as $linha){
            
            $idCliente= $linha['id'];
            $nomeCliente= $linha['nome'];
            $emailCliente= $linha['email'];
            $observacaoCliente = $linha ["observacao"];
            
            echo "
            <tr>
                <td>$nomeCliente</td>
                <td>$emailCliente</td>
                <td>$observacaoCliente</td>
                <td><a  ' href='clienteAlteracao.php?id=$idCliente'><i class='fa-regular fa-pen-to-square'></i></a></td>
                <td><a href='deleteCliente.php?id=$idCliente'><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            ";



            

        }
    
    ?>
    </div>
    </table>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://kit.fontawesome.com/2505969ee9.js" crossorigin="anonymous"></script>
</html>
