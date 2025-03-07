//Função par avalidação dos dados do clientes
 function validarDadosCliente(){

    if(formulario.nome.value.length < 3 || formulario.nome.value == ""){
        formulario.nome.focus();
        alert("Prencha o campo nome corretamente\nVerifique se o nome possui mais do que 3 caracterer.")
        return false
    }

   /*if(formulario.email.value.indexOf('@') ==-1 || formulario.email.value.indexOf('.')==-1){ //se formulario n tiver @ OU . (==-1/esta vazio) dara erro
        alert
    }*/

    //Forma mais organizada do exemplo acima
    if(formulario.email.value == "" || //se o campo estiver vazio
        formulario.email.value.indexOf('.')==-1 || //ou sem @
        formulario.email.value.indexOf('.')==-1){ //ou sem .
        formulario.email.focus();

        alert("Preencha o Campo email Corretamente!");
        return false;
     }
    
     if(formulario.observacao.value.length > 10){
        formulario.observacao.focus();
        alert("Ecedeu a capacidade de caracteres!\nNo momento possui: " +formulario.observacao.value.length);
        return false;
        

        }
    }