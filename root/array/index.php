<?php
    //exemplo do uso de is_array
    include_once('arrays.php');
    
    $variaveltexto = 'arthur'.'<br>';

    if(is_array($estado)) {
        echo 'é uma array<br><br>';
    }  else{
        echo 'Não é uma array<br><br>';
    }

    $removido = array_shift($estado);
    array_push($estado, 'paraná'); //adiciona no fim
    foreach($estado as $estadolinha){
        echo $estadolinha.'<br>';
    }
    echo  '<br><br><br>'; 

    $removido = array_pop($estado);
    echo $removido;

    if(in_array('São Paulo', $estado)){
        echo 'Estado encontrado';
    }

    if(array_key_exists('SP',$estadoChaves)){
        echo 'Chave encontrada';
    }

?>
