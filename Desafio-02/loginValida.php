<?php
// Inicializa as variáveis de erro
$erroLogin = $erroSenha = $erroCargo = "";

// Função para limpar os dados de entrada
function limpaEntrada($dado) {
    $dado = trim($dado);   // Remove espaços extras
    $dado = stripslashes($dado); // Remove barras invertidas
    $dado = htmlspecialchars($dado); // Converte caracteres especiais
    return $dado;
}

function validaLogin($login, $senha, $cargo) {
    global $erroLogin, $erroSenha, $erroCargo;

    // Validação do campo "Login"
    if (empty($login)) {
        $erroLogin = "O campo Login é obrigatório";
    } else {
        $login = limpaEntrada($login);
        if (strlen($login) < 3) {
            $erroLogin = "O Login deve ter no mínimo 3 caracteres";
        }
    }

    // Validação do campo "Senha"
    if (empty($senha)) {
        $erroSenha = "O campo Senha é obrigatório";
    } else {
        $senha = limpaEntrada($senha);
        if (strlen($senha) < 3) {
            $erroSenha = "A senha deve ter no mínimo 3 caracteres";
        }
    }

    // Validação do campo "Cargo"
    if (empty($cargo)) {
        $erroCargo = "Por favor, selecione o Cargo";
    }

    // Se não houver erros, valida o login (exemplo: comparando com banco de dados)
    if (empty($erroLogin) && empty($erroSenha) && empty($erroCargo)) {
        // A validação real pode ser feita aqui, como comparar com banco de dados
        echo "Dados validados com sucesso!"; // Exemplo
        return true;
    } else {
        // Se houver erros, armazena-os em variáveis de sessão para exibir no formulário

        $_SESSION['erroLogin'] = $erroLogin;
        $_SESSION['erroSenha'] = $erroSenha;
        $_SESSION['erroCargo'] = $erroCargo;
        return false;
    }
}
?>
