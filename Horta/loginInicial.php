<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - REviva</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/style/style.css"> 
    
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f8f0; 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            height: 100vh;
        }
        
        
        .login-wrapper {
            display: flex;
            width: 100%;
            height: 100%; 
            border-radius: 0; 
            box-shadow: none; 
            overflow: hidden; 
            transition: transform 0.3s ease-in-out;
        }
        .login-wrapper:hover {
            transform: none; 
        }

        
        .login-container {
            overflow-y: hidden;
            background-color: #ffffff; 
            padding: 40px;
            width: 35%; 
            height: 100%; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            text-align: center;
        }
        
       
        .image-container {
            width: 65%; 
            overflow: hidden;
        }

        .login-image {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            display: block;
        }

        
        h2 {
            margin-bottom: 30px;
            color: #0d6b57; 
            font-size: 2.2rem; 
            font-weight: 700;
            font-family: 'Playfair Display', serif; 
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%; 
            padding: 15px 12px;
            margin: 0; 
            border: 2px solid #ddd; 
            border-radius: 10px; 
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 1rem;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #2e7d67; 
            box-shadow: 0 0 8px rgba(46, 125, 103, 0.3);
        }
        
        
        .erro {
            color: #d9534f; 
            font-weight: 600;
            margin-top: 15px;
            padding: 10px;
            background-color: #fdf5f5;
            border-radius: 5px;
            border: 1px solid #d9534f;
            font-size: 0.9rem;
        }

       
        input[type="submit"], .btn-voltar {
            width: 100%;
            padding: 14px;
            font-size: 1.1rem;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease, opacity 0.3s ease;
        }

        input[type="submit"] {
            background-color: #0d6b57;
            color: #fff;
        }
        
        input[type="submit"]:hover {
            background-color: #2e7d67;
        }

        .btn-voltar {
            background-color: #e5f4e5;
            color: #0d6b57;
        }
        
        .btn-voltar:hover {
            background-color: #d8ead8;
        }
        
        @media (max-width: 992px) {
            .login-container {
                width: 45%; 
            }
            .image-container {
                width: 55%; 
            }
        }
        
        @media (max-width: 808px) {
            .login-wrapper {
                flex-direction: column; 
                height: auto;
                max-width: 420px; 
                margin: auto; 
                border-radius: 16px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
           
            body {
                justify-content: center;
                align-items: center;
            }
            
            .login-container {
                width: 100%; 
            }
            
            .image-container {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
            h2 {
                font-size: 1.8rem;
            }
        }
    </style>

</head>
<body>

<div class="login-wrapper"> 
    
    <div class="login-container">
        <h2>Login REviva</h2>
        <form action="home.php" method="POST">
            
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder='Insira seu e-mail' required>
            </div>

            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder='Insira sua senha' required>
            </div>
            
            <?php
                // Ajustei o estilo da mensagem de erro
                if(isset($_SESSION['erro'])){
                    echo "<p class='erro'>".$_SESSION['erro']."</p>";
                    unset($_SESSION['erro']);
                }
            ?>
            
            <input type="submit" value="Acessar" name="acessar">

            <button type="button" onclick="window.location.href='index.php'" class="btn-voltar">Voltar</button>

        </form>
    </div>
    
    <div class="image-container">
        <img src="./assets/img/foto-login.jpg" alt="Imagem da Horta REviva" class="login-image">
    </div>

</div>


</body>
</html>