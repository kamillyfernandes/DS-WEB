<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

if($nome == "aluno" && $senha == "sesi"){
    echo "Acesso permitido ";
    echo "<br>";
    echo "<a href='./index.html'>Voltar</a>";
}else{echo "Acesso negado,tente novamente";
    echo "<br>";
    echo "<a href='./index.html'>Voltar</a>" ;
}

?>