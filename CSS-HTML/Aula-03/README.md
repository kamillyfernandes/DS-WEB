"aula 03" 
APRENDEMOS NA AULA DE HOJE

<h3>Aprendemos Listas de Itens : </h3>
<br>
<b>listas não numeradas</b> (com bolinhas)
EX:uma lista de tarefas
< ul >
        < li >Item 1< /li>
        < li>Item 2< /li>
        < ul >
            < li>Item 3</ li>
            < ul >
                < li>Item 4< /li>
            < /ul>
         < /ul>
    < /ul>
<br>
<b>listas numeradas</b>(com números)
EX:
< ol>
        < li>Item</ li>
        < li>Item</ li>
        < ol>
            < li>Definição< /li>
        < /ol>
    < /ol>

 Também aprendemos como aninar uma lista dentro de outra, ou como fazer subtarefas e
<br>
<b>Definição</b>
EX:
< dl> 
        < dt>HTML< /dt>  
        < dd>Hypertext Markup Language< /dd> 
 < /dl>
 <br><br>

 <h3>Aprendemos DIV- difição, seção ou bloco :</h3>
 <br>
 EX:
   < div style="border:solid 1px; padding-left: 20px; margin-right: 20px; bo"> Olá, eu gosto de morangos 🍓< /div>    
< div style="background-color:black;color:white;pborder:solid 1px; padding-left: 20px; margin-right: 20px; bo;"> 
< p> < /p>
< br>< br>
    < h2>London< /h2>
    < p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.< /p>
    < p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.< /p>
 <br><br>

 <h3>Aprendemos Imput - Tipos de entradas de dados :</h3>
 <br>
 EX: 
    < label>Input do tipo Number< /label> 
    < input type="number"> < !--Formulário para Números-->

    < label>Input do tipo password</label> 
    < input type="password"> <!--Formulário para senha-->

    < input type="radio" value="HTML"> <!--caixa de seleção-->
    <label>HTML</label>

    <input type="checkbox" value="CSS"> <!--Caixa de seleção com  check-->
    <label>CSS</label>

    <input type="button" value="Botão de ação" > <!--Botão que você configura uma ação-->

    <input type="submit" value="Botão submit"> <!--Botão para enviar -->
<br><br>

<h3> Aprendemos a fazer Formulário :</h3>
 <br>
EX:

< h3>Form - Formulário</ h3> !--Agrupar todos os inputs, e decidir como vai enviar essa informação-->
 form action="" method="get" >
    
    <label>Nome de usuário</label><br> <!--Explicação do input -->
    <input type="text" name="nome"><br> <!--name:nome da variavel -->

    <label>Campo com Value Preenchimedo</label><br> <!--Explicação do input -->
    <input type="text" name="value" value="Campo com value"><br> <!--Já vem preenchido-->

    <label>Campo com Placeholder</label><br><!--Explicação do input -->
    <input type=" text" name="placeholder" placeholder= "Campo que possuí placehorlder"><br> <!--informaçao fantasma, uma guia-->

    <label>campo com Required</label><br><!--Explicação do input -->
    <input type="text" name="required" required><br>  <!--tornar esse campo obrigatorio para preencher-->

    <label> Campo com Maxlength</label><br> <!--Explicação do input -->
    <input type="text" name="maxlength" maxlength="5"><br>  <!--Limita o numero de caracteres inceridos ex: tolera 5 caractere-->

    <label>Campo com Disabled</label><br> <!--Explicação do input-->
    <input type="text" name="disabled" disabled><br> <!--vizualizar apenas-->

    <label>Campo com Readonly</label><br><!--Explicação do input -->
    <input type="text" name="readonly" readonly><br> <!--somente ler copia a informaçao--> 

    <label> Campo com uma Boa Validação</label><br> <!--Explicação do input -->
    <input type="text" name="BoaValidação" maxlength="8" required placeholder=" Campo boa validação"><br> <!--união de varios input-->
   
    <textarea name="mensagem"></textarea><br> <!--Usado para textos grandes, pois ele se configura conforme o tamanho da escrita-->

        <select name="opcoes"> <!--criaçao da estrutura de option-->
            <option>Opção 1</option>
            <option>Opção 2</option>
            <option>Opção 3</option>
            <option>Opção 4</option>
            <option>Opção 5</option>
        </select>
    
     <input type="submit"> <!--Enviar arquivo-->