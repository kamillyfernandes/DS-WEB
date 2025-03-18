<?php
session_start();
include("conexao.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['login']) && !empty($_POST['senha']) && !empty($_POST['cargo'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $cargo = $_POST['cargo'];

        try {
            $sql = "SELECT * FROM administrador WHERE email = :email AND senha = :senha AND cargo = :cargo";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $login);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':cargo', $cargo);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['login'] = $usuario['email'];
                $_SESSION['cargo'] = $usuario['cargo'];

                // Redireciona para o index.php
                header("Location: index.php");
                exit;
            } else {

                $_SESSION['erro'] = "Login, senha ou cargo inválidos.";
                header("Location: login.php");
                exit;
            }
        } catch (PDOException $e) {
            echo "Erro no banco de dados: " . $e->getMessage();
        }
    } else {
        $_SESSION['erro'] = "Preencha todos os campos.";
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon.svg" href="./assets/img/icon.svg"> 
    <title>Login</title>
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
            width: 95%;
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

        }

        .cargo-radio label {
            font-size: 16px;
            margin-right: 10px;
            color: #555;
            
        }

        .cargo-radio input[type="radio"] {
            margin-right: 5px;
   
            
        }

        .erro {
            color: red;
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #e7c6b1;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d1a78f;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #e7c6b1;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #d1a78f;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .footer a {
            color: #555;
            font-size: 14px;
            text-decoration: none;
        }

        .footer a:hover {
            color: #d1a78f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" name="login" required placeholder="Digite seu login">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required placeholder="Digite sua senha">

            <div class="cargo-radio">
                <label>Cargo:</label><br>
                <input type="radio" name="cargo" value="admin" required> Administrador
                <input type="radio" name="cargo" value="vendedor" required> Colaborador
            </div>

            <input type="submit" value="Entrar">

            <?php
                if (isset($_SESSION['erro'])) {
                    echo '<p class="erro">' . htmlspecialchars($_SESSION['erro']) . '</p>';
                    unset($_SESSION['erro']);
                }
            ?>
        </form>

        <div class="footer">
            <a href="#">Esqueceu sua senha?</a>
        </div>
    </div>
</body>
</html>
