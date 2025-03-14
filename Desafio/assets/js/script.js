// Função para validação dos produtos
function validarDadosProdutos() {
    const codigo = formulario.codigo.value.trim();
    const nome = formulario.nome.value.trim();
    const preco = formulario.preco.value.trim();
    let estoque = formulario.estoque.value.trim();
    const descricao = formulario.descricao.value.trim();

    // Limpar todas as mensagens de erro
    document.getElementById("erro-codigo").innerHTML = "";
    document.getElementById("erro-nome").innerHTML = "";
    document.getElementById("erro-preco").innerHTML = "";
    document.getElementById("erro-estoque").innerHTML = "";
    document.getElementById("erro-descricao").innerHTML = "";

    // Validação do código do produto
    if (codigo.length < 12) {
        document.getElementById("erro-codigo").innerHTML = "O código deve ter no mínimo 12 caracteres.";
        formulario.codigo.focus();
        return false;
    }

    // Validação do nome do produto
    if (nome.length < 3) {
        document.getElementById("erro-nome").innerHTML = "O nome deve ter no mínimo 3 caracteres.";
        formulario.nome.focus();
        return false;
    }

    // Validação do preço
    if (preco === "" || parseFloat(preco) <= 0) {
        document.getElementById("erro-preco").innerHTML = "Insira um preço válido e maior que zero.";
        formulario.preco.focus();
        return false;
    }

    // Validação do estoque
    if (estoque === "" || parseInt(estoque) < 0) {
        document.getElementById("erro-estoque").innerHTML = "O estoque não pode ser negativo.";
        formulario.estoque.focus();
        return false;
    }

    // Se o estoque for zero, define como "Sem estoque"
    if (parseInt(estoque) === 0) {
        estoque = "Sem estoque";
        formulario.estoque.value = estoque; // Atualiza o valor no formulário
    }

    // Validação da descrição
    if (descricao.length > 1000) {
        document.getElementById("erro-descricao").innerHTML = `A descrição não pode ter mais de 1000 caracteres (atualmente: ${descricao.length}).`;
        formulario.descricao.focus();
        return false;
    }

    return true;
}

// Função para validação dos dados do cliente
function validarDadosCliente() {
    var emailValue = formulario.email.value.trim();

    // Validação do nome do cliente
    if (formulario.nome.value.length < 3 || formulario.nome.value == "") {
        formulario.nome.focus();
        document.getElementById("erro-nome").innerHTML = "Verifique se o nome possui mais do que 2 caracteres.";
        document.getElementById("erro-email").innerHTML = "";
        document.getElementById("erro-observacao").innerHTML = "";
        return false;
    }

    // Validação do email
    if (emailValue.indexOf('@') == -1 || emailValue.indexOf(".") == -1 || emailValue == "") {
        formulario.email.focus();
        document.getElementById("erro-nome").innerHTML = "";
        document.getElementById("erro-email").innerHTML = "Preencha o campo email corretamente!";
        document.getElementById("erro-observacao").innerHTML = "";
        return false;
    }

    // Validação da observação
    if (formulario.observacao.value.length > 1000) {
        formulario.observacao.focus();
        document.getElementById("erro-nome").innerHTML = "";
        document.getElementById("erro-email").innerHTML = "";
        document.getElementById("erro-observacao").innerHTML = `Excedeu a capacidade de 1000 caracteres!<br>No momento possui ${formulario.observacao.value.length} caracteres.`;
        return false;
    }

    return true;
}
