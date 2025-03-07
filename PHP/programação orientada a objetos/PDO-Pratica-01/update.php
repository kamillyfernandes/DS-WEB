
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC); // Todos os registros retornados

?>
    <div class= "container"> <!---->
        <div class= "formulario"> <!--Div para o formulario-->

            <form action= ".php" method="POST" > <!--formulario enviando para .php por POST=metodo mais seguro pois fica oculto-->
                <label for="">Nome: </label>
                <input type="text" name="nome">
                <br><br>
                <label for="">E-mail: </label>
                <input type="text" name="email"> 
                <br><br>
                <input type="Submit">


                <?php

$novoNome = "Bruno Attina";
    $email = "bruno@gmail.com";

    $stmt = $db->prepare('UPDATE clientes SET nome = :nome WHERE email
    = :email');
    $stmt->execute(array(
    ':nome' => $novoNome,
    ':email' => $email
    ));

    if( $stmt->rowCount() > 0 ) {
    echo "Ocorreram ".$stmt->rowCount()." alterações na tabela.";
    } else {
    echo 'Nada foi alterado.';
    }
  
?>

    </form>

    </div> 
    </div>

</body>
</html>