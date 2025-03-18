<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg">
    <title>Business System - Cadastro</title>

    <style>
        body {
            background-color: #d6ccc2;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            font-size: 14px;
            color: #555;
        }

        input[type="text"], input[type="password"] {
            width: 93%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #e7c6b1;
            outline: none;
        }

        .cargo-radio {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .cargo-radio label {
            font-size: 14px;
            margin: 0 5px;
            color: #555;
        }

        .cargo-radio input[type="radio"] {
            margin-right: 5px;
            transform: scale(1.2);

            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: lightblue;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: lightcyan;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #d1a78f;
        }
    </style>

</head>
<body>
    <div class="menu">
    <ul>
        <li><a href="index.php" class="meumenu" title="home">Home</a></li>
    </ul>
    </div>
    <div class="container">
        <hr>
        <div class="formulario">
        <form action="insertionAdmin.php" method="POST" name="formulario" onsubmit="return validaCadastro()">

                <label for="nome">E-mail: </label>
                <input type="text" name="email" id="email"  placeholder="insira seu Email">
                <p class="erro-input" id="erro-email"><?=isset($_SESSION['erroEmail']) ? $_SESSION['erroEmail'] : "";?></p>


                <label for="email">Senha: </label>
                <input type="text" name="senha" id="senha"  placeholder="Insira sua senha">
                <p class="erro-input" id="erro-senha"><?=isset($_SESSION['erroSenha']) ? $_SESSION['erroSenha'] : "" ?></p>

                <div class="cargo-radio">
                <label>Cargo:</label><br>
                <input type="radio" name="cargo" value="admin" required>
                <label for="admin">Administrador</label>
                
                <input type="radio" name="cargo" value="vendedor" required> 
                <label for="vendedor">Colaborador</label>
                </div>


                <input type="Submit">

            </form>
        </div>
    

    <table id="clientes">
        <br>
        <tr>
            <th>E-mail</th>
            <th>Cargo</th>
            <th>Senha</th>
        </tr>
    
    <?php
        include "conexao.php";



        $dados = $db->query("SELECT * FROM administrador");
        $todos = $dados->fetchAll(PDO::FETCH_ASSOC); //Todos os registros retornados
     
        foreach($todos as $linha){
            $idCadastro= $linha['id'];
            $nomeCadastro= $linha['nome'];
            $cargoCadastro=$linha['cargo'];
            $emailCadastro= $linha['email'];
            $senhaCadastro = $linha ["senha"];
    
            
            echo "
            <tr>
                <td>$emailCadastro</td>
                <td>$cargoCadastro</td>
                <td>$senhaCadastro</td>
                
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
