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
