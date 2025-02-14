//Exercicio 01
function BotaoDeClick(){
    var nome = document.getElementById("nome").value; 
    var nome1 = nome;
    document.getElementById("resultado").innerHTML = "Seja bem vindo ao site " +nome1; 
}

//Exercio 02

function Verificar(){
    var numero = document.getElementById("numero").value; 
    var numero1 = numero;
    console.log(typeof numero1) //verificando se ele esta recebendo numero
    numero = parseInt(numero); // Convertendo o valor para inteiro

    if (numero % 2 === 0) { //se o numero for par o resto da divisão por 2 será 0
        document.getElementById("calcular").innerHTML = "O número " + numero1 + " é par.";
    } else { // caso haja resto o numero sera ímpar
        document.getElementById("calcular").innerHTML = "O número " + numero1 + " é ímpar."; //printando na tela
    }
}

//Exercio 03

function Maiscula() {
    var nome = document.getElementById("frases").value; 
    var fraseMaiusculo = nome.toUpperCase();  // Tranformando em maiúsculas   
    document.getElementById("frase").innerHTML = fraseMaiusculo; // Exibindo na tela

}
   
//Exercicio 04

function Calculo() {
    var valor1 = parseFloat(document.getElementById("valor").value);
    var porcentagem = parseFloat(document.getElementById("porcentagem").value);

    if (isNaN(valor1) || isNaN(porcentagem)) {
        document.getElementById("calculo").innerHTML = "Insira valores válidos.";
        return;
    }

    
    var resultadoporcentagem = valor1 * (porcentagem / 100);// Calculando o valor da porcentagem   
    document.getElementById("calculo").innerHTML = "O valor final é: " + resultadoporcentagem;
}

//Exercicio 05


function Cor() {
    var div = document.querySelector(".minhaDiv");
    // Alterna entre as cores
    div.style.backgroundColor = (div.style.backgroundColor === 'hotpink') ? 'purple' : 'hotpink';
}
