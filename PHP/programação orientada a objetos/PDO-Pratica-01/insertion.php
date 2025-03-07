<?php
    

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
 
        //redirecionando com script
        echo "<script>alert('Esta faltando o metodo POST')
        window.location.href = 'index.php'; 
        </script>";

        //header("Location: index.php"); //mando de volta para o index = redirecionamento com php
    }

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        include "conexao.php"; //ligação com banco de dados

        echo "<h2>Inserindo dados</h2>";
        $statement = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");

        $statement->execute(array($nome, $email));

        header("Location: index.php"); //mando de volta para o index

        

?>
<?php
