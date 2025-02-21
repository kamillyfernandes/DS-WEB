

//01-div que aumenta e muda de cor

    var a = window.document.getElementById('area')
    //definindo div inicial
        a.style.width = "300px";
        a.style.height = "300px";
        a.style.background = "lightblue";
        a.style.display = "flex";

    //alinhando o texto
    a.style.display = 'flex';
    a.style.justifyContent = 'center'; // Alinhando o conteúdo horizontalmente
    a.style.alignItems = 'center'; // Alinhando o conteúdo verticalmente

    //defindindo elemento, adicionando elemento, o evento e o funçao a ser definida
        a.addEventListener('mouseenter', entrar)
        a.addEventListener('mouseout', sair)

    function entrar(){
        a.innerText = 'Entrou!';
        a.style.background = 'red';
        a.style.height = '350px'; // Aumenta o tamanho do quadrado
        a.style.width = '350px';
    }

    function sair(){
        
        a.innerText = 'Saiu!';
        a.style.background = 'lightblue';
        a.style.height = '300px'; //voltando o tamanho do quadrado
        a.style.width = '300px';
    }

    //02-digitando oq escrevi
 
    document.addEventListener("DOMContentLoaded", function () { 
        var Texto = document.getElementById("texto"); 
        var resultado = document.getElementById("resultado");  //onde será exibido
    
        Texto.addEventListener("input", function() { //ouvinte de evento tofa vez que eu utilizo o input
            resultado.innerText = Texto.value; 
        });
    });
    
    //03-Contando click na tela

    document.addEventListener("DOMContentLoaded", function () { //quando a pagina estiver totalmente carrecada
        var botao = document.getElementById("botao"); //puxando o id botão
        var contador = document.getElementById("contador"); //puxando o id Contador
        var cliques = 0; //velor de clique começa com 0
    
        botao.addEventListener("click", function() { //le todas as vezes q aperto o evento no caso o click
            cliques++; //inclementando o cliques = toda vez que o botão por apertado soma + um
            contador.innerText = cliques; //ira contar o valor de cliques
        });
    });
    
   //04-Mensagem bem-vindo
    
   document.addEventListener("DOMContentLoaded", function () { //quando o documento HTML é completamente carregado na  pagina
    var div = document.createElement("div"); //criando um novo elemento (div)
    div.innerText = "Bem-vindo!"; //defininfo o texto da div
    div.style = "width: 250px; padding: 15px; text-align: center; background: gray; color: white; position: relative; top: 50px; font-size: 18px; border-radius: 6px;"; //estilizando a div
    document.body.appendChild(div); //adicionando a fiv ao corpo deixando visivel
});

