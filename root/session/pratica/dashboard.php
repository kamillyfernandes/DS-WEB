<?php
 
    session_start();
    $loginCerto = 'Kamilly';
    $senhaCerta = '123';

    //verificando po preenchimento da sessão
        if(isset($_POST['login'])){
        if($loginCerto == $_POST['login'] and $senhaCerta == $_POST['senha']){ //verificando senha e login se esta correto
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
    }

}

    //se minha senha e login existir no campo sera exibido dados do usuario
    if (isset($_SESSION['login']) and isset($_SESSION['senha'])){
        $_POST['login'];
        echo '<br>';
        $_POST['senha'];
  }else{  //caso não seja preenchido o campo volta para a sessão de login
   header('Location: index.php');
}





?>