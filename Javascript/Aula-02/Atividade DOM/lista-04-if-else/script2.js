//01- Maior de idade

function Verificando(){

    var valor = document.getElementById("valor").value;
    var numero = Number(valor); 
    console.log(typeof numero, numero); // Verificando se está recebendo um número
    
    if (numero >= 18) { //Se nuúmero for igual ou maio que 18
        document.getElementById("idade").innerHTML = "Você é maior de idade";
    } else { // se for menor
        document.getElementById("idade").innerHTML = "Você é menor de idade";
    }
}


//02-numeros,positvos,negativos ou 0

function Verificar(){

    var valor = document.getElementById("numero").value;
    var numero = Number(valor);  //tem a função de converter o valor que foi inserido no campo de input (valor) para um número.
    console.log(typeof numero, numero); // Verificando se está recebendo um número
    
    if (numero > 0) { // Se o número for maior que 0
        document.getElementById("resultados").innerHTML = "O número é positivo!";
    } else if (numero < 0) { // Se o número for menor que 0
        document.getElementById("resultados").innerHTML = "O número é negativo!";
    } else { // Se o número for igual a 0
        document.getElementById("resultados").innerHTML = "O número é zero!";
    }
}

//03-Login

function Login() {

    // Obter os valores dos campos de login e senha
    var usuario = document.getElementById("login").value;
    var senha = document.getElementById("senha1").value;

    // Verificando usuário e senha 
    if (usuario === "admin" && senha === "12345") { //=== grandeza e tipo do dado e && validar também duas ou mais informaçoes
        document.getElementById("verificar").innerHTML = "Seja bem-vindo !";
    } else {
        document.getElementById("verificar").innerHTML = "OCORREU UM ERRO, tente novamente !";
    }
}


//04-Operações 

function calcular() {
    // Obter os valores dos campos de números e operação
    var nume1 = parseFloat(document.getElementById("Numero1").value);
    var nume2 = parseFloat(document.getElementById("Numero2").value);
    var operacao = document.getElementById("operacao").value;

    var resultado;

    //=== grandeza e puxa o tipo do dado
    if (operacao === "adição") { //se for adção
        resultado = nume1 + nume2;
    } else if (operacao === "subtração") { //se for subtração
        resultado = nume1 - nume2;
    } else if (operacao === "multiplicação") { //se for multiplição
        resultado = nume1 * nume2;
    } else if (operacao === "divisão") {
        resultado = nume1 / nume2;
    }
        
     // Exibir o resultado
    document.getElementById("resposta").innerHTML = "Resultado: " + resultado;
}


//05- Impar ou par

    function Verifica(){
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

//06- Qual número é maior

function validacao() {

    // validando numeros
    var num1 = document.getElementById("numero1").value;
    var num2 = document.getElementById("numero2").value;
    var num3 = document.getElementById("numero3").value;

    // Verificar se os campos não estão vazios
    if (!num1 || !num2 || !num3) { // "||"=(OU) é usado para verificar se algum dos valores (num1, num2, num3) é falso /caso n seja preenchido
        document.getElementById("resposta").innerHTML = "Por favor, insira todos os números.";
        return;
    }

    // Converter para números e encontrar o maior
    num1 = parseFloat(num1);
    num2 = parseFloat(num2);
    num3 = parseFloat(num3);

    // Encontrar o maior número
    var maior = Math.max(num1, num2, num3); //O método Math.max() é uma função que retorna o maior número entre os valores inseridos 

  
    document.getElementById("valido").innerHTML = "O maior número é: " + maior;//Exibinod
}

//07- Triangulo

function triangulo() {
    const lado1 = parseFloat(document.getElementById("lado1").value);
    const lado2 = parseFloat(document.getElementById("lado2").value);
    const lado3 = parseFloat(document.getElementById("lado3").value);

    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3) || lado1 <= 0 || lado2 <= 0 || lado3 <= 0 ||
        lado1 + lado2 <= lado3 || lado1 + lado3 <= lado2 || lado2 + lado3 <= lado1) {
        document.getElementById("triangulo").innerHTML = "Valores inválidos ou os lados não formam um triângulo.";
        return;
    }

    if (lado1 === lado2 && lado1 === lado3) {
        document.getElementById("triangulo").innerHTML = "O triângulo é equilátero.";
    } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
        document.getElementById("triangulo").innerHTML = "O triângulo é isósceles.";
    } else {
        document.getElementById("triangulo").innerHTML = "O triângulo é escaleno.";
    }
}

