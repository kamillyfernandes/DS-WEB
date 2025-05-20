<?php
    extract($dados);
?>

<div class="container">
    <hr> <!--linha encima do formulario-->
    <div class="formulario">
        
        <div class="div-photo">
        <img id="previewImagem" src="<?=empty($fotoUsuario) ? "./photos/" .$fotoUsuario : "./photos/user.png";?>" class="photo-user" all="Imagem de perfil do usuário">
            <p>Recomenda-se uma imagem de dimensão 200x200</p>
        </div>
        <form action="usuario" method="POST" name="formulario" enctype="multipart/form-data">

            <label for="nome">Nome: </label>
            <input type="text" name="nomeUsuario" id="nome" value="<?=isset($nomeUsuario) ? $nomeUsuario : "";?>" disabled>
        
            <label for="email">E-mail: </label>
            <input type="text" name="emailUsuario" id="email" value="<?=isset($emailUsuario) ? $emailUsuario : "";?>" disabled>

            <label for="senha">Senha: </label>
            <input type="password" name="senhaUsuario" id="senha" value="<?=isset($senhaUsuario) ? $senhaUsuario : "";?>" disabled>
            
            <label for="fotoUsuario">Foto de Perfil: </label>
            <input type="file" name="fotoUsuario" id="fotoUsuario" onchange="alteraImagem(this)" disabled> <!--this= esse arquivo-->

            
            <input type="submit">

        </form>
    </div>
</div>

<div class="div-button-edit">
    <button class="button-edit" onclick="habilitarEdicao()">Habilitar Edição</button> 
</div>

<script>

    var verificador = 1 //cria variavel verificador
    var texto = "Desabilita edição"
    function habilitarEdicao(){ //vai habilittar quando tiver apertado
        var campos = document.querySelectorAll("input") //vai selecionar todos os imputs
        if(verificador == 1){ //se meu verificador for = a 1
            verificador = 0 //mudo pra zera = esta habiltado (mentira)
            texto = "Desabilitar edição" 

        }else{
            verificador = 1 //se nao muda pra um = esta desabilitado (verdade)
            texto = "Habilitar edição"
        }
        document.getElementsByClassName('button-edit')[0].innerHTML = texto
        campos.forEach(campo => { //para cada campo faça
            campo.disabled = verificador; //vai verificar
        });
    }

    function alteraImagem(imagem){ //this = imagem
        console.log(imagem); //como fica no console log
        const img = document.getElementById('previewImagem'); //constante img e seleciona onde a imagem vai ficar 
        const file = imagem.files[0]; //imagem que vem do this, e acessa os arquivo do primeiro arquivo que vier
        if (file) img.src = URL.createObjectURL(file); //verifica se tem algo dentro, se existir pega img e joga em img src
    }
</script>