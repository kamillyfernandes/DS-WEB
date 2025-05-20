<?php

require_once __DIR__ . '/database.php'; //classe Database com métodos para conectar ao banco e executar consultas.

class Produto{ //colsutando e inserindo dados na tabela produto 
    private $conexao;

    public function __construct(){ // (__construct) instancia um novo objeto Database
        $this->conexao = new Database; //cria uma instância da classe Database e armazena em $conexao.
    }

    public function queryOne($parameters){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos WHERE idProduto = :idProduto", $parameters);
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;

    }
        public function inserirProduto($dados) { //recebendo array dados
            // pegando valores nome, preco, quantidade
            $nome = trim($dados['nome'] ?? ''); //?? '' == se a chave não existir, o valor vai ser uma string vazia ('').
            $preco = trim($dados['preco'] ?? ''); 
            $quantidade = trim($dados['quantidade'] ?? '');
    
            $erros = []; //Cria um array vazia q para armazenar mensagens de erro
     
            //verificação dos campos
            if (empty($nome)) { 
                $erros[] = "O nome é obrigatório.";
            }
    
            if (!is_numeric($preco) || $preco <= 0) { // is_numeric=verificar se um valor é numérico, verifica se o valor e menor ou = a zero 
                $erros[] = "O preço deve ser um número positivo.";
            }
    
            if (!is_numeric($quantidade) || $quantidade < 0) {
                $erros[] = "A quantidade deve ser um número válido.";
            }
    
            // Se houver erros, retorna eles
            if (count($erros) > 0) {
                return ['status' => false, 'erros' => $erros];
            }
    
            // Preparar a query de inserção
            $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nomeProduto, :precoProduto, :quantidadeProduto)";
            $parameters = [
                ':nomeProduto' => $nome,
                ':precoProduto' => $preco,
                ':quantidadeProduto' => $quantidade
            ];
    
            $this->conexao->executeQuery($sql, $parameters);
    
            return ['status' => true, 'mensagem' => "Produto inserido com sucesso!"];
        }
    // Novo método que cadastra produto diretamente, usando $parameters sem validação extra
    public function cadastraProduto($parameters) {
        $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nomeProduto, :precoProduto, :quantidadeProduto)";
        $resultado = $this->conexao->executeQuery($sql, $parameters);

        if ($resultado) {
            return ['status' => true, 'mensagem' => 'Produto cadastrado com sucesso!'];
        } else {
            return ['status' => false, 'mensagem' => 'Erro ao cadastrar produto.'];
        }
    }

    // Método para listar todos os produtos
    public function queryAll() {
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos");
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
}
        
    

