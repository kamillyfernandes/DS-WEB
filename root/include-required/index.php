<?php

    $idadeUsuario = 16;

    //Include cabeçalho 
    include ('head.html');

    //include o corpo 
    if($idadeUsuario>= 16){
        include ('body.html');
    }else{
        include ('body2.html');
    }

    //include o corpo php com require
    require_once ('body.php');
   
    //include o rodapé
    include ('footer.html');
?>