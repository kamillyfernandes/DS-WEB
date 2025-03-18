<?php
session_start();
include_once('conexao.php'); // Conexão com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['login']) && !empty($_POST['senha'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        // Consulta para verificar login e senha diretamente
        $sql = "SELECT * FROM administrador WHERE email = :email AND senha = :senha";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Verifica se encontrou algum registro
        if ($stmt->rowCount() > 0) {
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['login'] = $linha['email'];
            $_SESSION['cargo'] = $linha['cargo'];

            // Redireciona para o dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            $_SESSION['erro'] = "Login ou senha inválidos.";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION['erro'] = "Preencha todos os campos.";
        header("Location: login.php");
        exit;
    }
}

// Verificação de sessão na página protegida
if (isset($_SESSION['login'])) {
    echo "<br>Usuário: " . htmlspecialchars($_SESSION['login']) . "<br><br>";
    echo '<a href="logout.php"><button>Logout</button></a>';
} else {
    header("Location: index.php");
    exit;
}
?>
