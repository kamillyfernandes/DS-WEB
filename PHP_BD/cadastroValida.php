<?php
session_start(); // Garante que a sessão foi iniciada

// Inicializa as variáveis de erro
$erroEmail = $erroSenha = "";

// Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado;
}

function validaCadastro($email, $senha) {
    global $erroEmail, $erroSenha;

    if (empty($email)) {
        $erroEmail = "O e-mail é obrigatório";
        return false;
    } else {
        $email = limpaEntrada($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato de e-mail inválido";
            return false;
        }
    }

    if (empty($senha)) {
        $erroSenha = "A senha é obrigatória";
        return false;
    } else {
        $senha = limpaEntrada($senha);
        if (strlen($senha) < 7) {
            $erroSenha = "O campo precisa possuir no mínimo 7 caracteres";
            return false;
        }
    }

    // Se tudo estiver correto, processa os dados
    if (empty($erroEmail) && empty($erroSenha)) {
        return true;
    } else {
        $_SESSION['erroEmail'] = $erroEmail;
        $_SESSION['erroSenha'] = $erroSenha;
        return false;
    }
}
?>
