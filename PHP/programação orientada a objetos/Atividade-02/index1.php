<?php
//classe pai

    class Pessoa { //encapasulamento

        public $Nome;
        protected $Idade;

    // Métodos para acessar os atributos
    public function getNome() {
        return $this->Nome;  // Acessando o nome
    }

    public function setNome($nome) { //set= modificar o valor desses atributo, podendo escolher o nome.
        $this->Nome = $nome;
    }

    public function getIdade() { //Get = acessando o valor de um atributo privado ou protegido da classe.
        return $this->Idade; // Acessando a idade
    }

    public function setIdade($idade) { //set= modificar o valor desses atributo, podendo escolher o idade.
        $this->Idade = $idade;
    }

}

//Classe filho 

    class Funcionario extends Pessoa { //herança

        protected $Salario; //salario protegido
 
        //atribuindo salario
        public function getSalario() { //puxando valor
            return $this->Salario;
        }
    
        public function setSalario($n) { //defininfo valor
            $this->Salario = $n;
        }
        public function calcularBonus() {
            return 0; //valorpadrão, indica que a clas funcionario n tem nem um valor a ser calculado
        }
    }

//



//subclasses

    class Gerente extends Funcionario { //herança

        public function calcularBonus() { //deixando publico quantos que foi o bonus
            return $this->Salario * 0.20; // colocando 20% de bônus para p Gerente
        }
    }

    class Desenvolvedor extends Funcionario { //herança

        public function calcularBonus() { //deixando publico quantos que foi o bonus
            return $this->Salario * 0.10; // colocando 10% de bônus para para Desenvolvedor
        }
    }

//printando nda tela e definindo valores


$gerente = new Gerente(); 
$gerente->setNome("Caio"); // Definindo o nome do gerente
$gerente->setIdade(29); // Definindo a idade do gerente
$gerente->setSalario(10000); //salario
echo "Nome do Gerente: " . $gerente->getNome() . "<br>"; // Exibindo nome do gerente
echo "Idade do Gerente: " . $gerente->getIdade() . "<br>"; // Exibindo idade do gerente
echo "Bônus do Gerente: R$ " . $gerente->calcularBonus() . "<br><br>"; // Exibindo bônus do Gerente

$desenvolvedor = new Desenvolvedor();
$desenvolvedor->setNome("Stela"); // Definindo o nome do desenvolvedor
$desenvolvedor->setIdade(20); // Definindo a idade do desenvolvedor
$desenvolvedor->setSalario(8000); //salario
echo "Nome do Desenvolvedor: " . $desenvolvedor->getNome() . "<br>"; // Exibindo nome do desenvolvedor
echo "Idade do Desenvolvedor: " . $desenvolvedor->getIdade() . "<br>"; // Exibindo idade do desenvolvedor
echo "Bônus do Desenvolvedor: R$ " . $desenvolvedor->calcularBonus() . "<br>"; // Exibindo bônus do Desenvolvedor
?>
