//window.document.write(window.document.URL); //printando 

//MExemplo-01 Tagname
var p1 = window.document.getElementsByTagName('p')[0]; //selecionando pela tag e dizendo qual o paragrafo
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText; //passando primeiro paragrafo para linha quatro

//Exemplo-02 ID
document.getElementById("teste").innerHTML = "Hello word !"; //chamando o id e adcionando uma informação

//Exemplo-03 ClassName

var classes = document.getElementsByClassName("exemplo"); //chamando a class
classes[0].innerHTML = "Hello word!"; //chamando uma das class especifica e adcionando  um texto diferente

//Exemplo-04 Seletor
//document.querySelector("p").style.backgroundColor= "red" // selecionando apenas pela tag
document.querySelector("p#paragrafo").style.backgroundColor = "pink" //selecinando pela tag + ID=#

var paragrafo = document.querySelector("p").style //simplificando
paragrafo.backgroundColor= "red";
paragrafo.color= "white";

//Exemplo-05 Botão

function alertaDeClique(){
    alert("Você clicou no botão");
}

//Exemplo-06 Calcular

function calcular(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;

    //convertendo numeros
    console.log(typeof numero1); //qual o tipo de informação que tem
    var numero1 = Number.parseInt(numero1);
    var numero2 = Number.parseInt(numero2);
    console.log(typeof numero1)
    
    var resultado = numero1 + numero2;

    document.getElementById("resultado").innerHTML = "Resultado: " +resultado; 

}


