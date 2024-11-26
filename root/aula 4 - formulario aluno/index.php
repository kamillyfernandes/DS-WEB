<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action=""> <!--pagina que vai ser enviada-->
    <h1>Formulário</h1> <!--tí<tulo-->

    <!--preenchimento alunos-->
     <label for="name">Aluno: </label> <!--label:titulo da ciaxa--> <!--for:quando clicar na letra selecionar o campo-->
     <input type="text" required id="name" autofocus > <!--imput=campo de entrada / type = tipo do campo / required= diexa o campo obrigatorio / atofocus = deixa o primeiro campo seleconado -->
     <label for="n/chamada">N° da chamada: </label>
     <input type="number" required id="n/chamada" max="32" >
     <br><br>

    <!--preenchimento RM-->
    <label for="rm">RM: </label>
    <input type="number" required id="rm" max="9999"> <!--max = valor maximo para se inserir -->
    <br><br>

    <!--patrimonio da Maquina-->
    <label for="patrimonioM">Patrimônio máquina: </label>  
    <input type = "number" required id="patrimonioM" max="9999999">
    <br><br>

    <!--st (servicetag)-->
    <label for="st"> Service tag: </label>
    <input type = "text" required id="st">
    <br><br>

    <!--foto da maquina-->
    <label for="foto">Foto: </label>
    <input type="file" required id="foto" > <!--pedindo um arquivo-->
    <br><br>


    <input type="submit" value="Cadastrar"> <!--botão que envia a pagina-->
    <input type="reset" name="limpar" value="Limpar"> <!--botão que limpa a pagina-->


</body>
</html>