<?php
    //Criando um Cookie
    //setcookie("usuario", "Carol", time() + 7*24*(60*60), '/');
    setcookie("usuario", "Bruno", time() + 7*24*(60*60), '/');

    //Destruindo um cookie
    setcookie("UsuarioAntigo", "Bruno", -3600, '/');
    print_r($_COOKIE);
?>