<?php

class Contabancaria { //classe, istruturando uma informação, estrutura para ajudar os objetos

    //Atributos

    public $nomedotitular; //Publico 
    protected $numeroConta; //Protegido
    public $saldo; //publico

    //Metodo:
    public function exibirSaldo(){
        return "O saldo da conta é: R$" .$this->saldo. ",00";
        //"O número da conta é: " .$this->numeroConta.
        //"O nome do Titular é: " .$this->nomedotitular;
    }

    public function depositar (deposito){
        $this->saldo -= $deposito;
        return "Este é o novo saldo" . ->$this->saldo;
        
    }
    public function sacar (){
        $this->saldo -= $saque;
        return "Este é o novo saldo" . ->$this->saldo;
    }
    public function exibir (){

    }
} //fechando classe

$contaKamilly = new ContaBancaria(); 
$contaKamilly ->nomedotitular = "Kamilly Silva";
$contaKamilly ->nuemeroConta = "28082007";
$contaKamilly ->saldo = 100000000000000000;

echo "Tutular da conta: " .contaKamilly->titular
echo "<br>" ;
echo $contaKamilly ->exibirSaldo() . "<br><br>";
echo $contaKamilly ->sacar(20) . "<br><br>";

$contaStefany = new ContaBancaria();
$contaStefany ->nomedotitular = "Stefany freire";
$contaStefany ->nuemeroConta = "08102001";
$contaStefany ->saldo = 80000000000000;

echo "Tutular da conta: " .contaStefany->titular
echo "<br>" ;
echo $contaStefany ->exibirSaldo() . "<br><br>";
echo $contaStefany ->sacar(20) . "<br><br>";


$contaJaqueline = new ContaBancaria();
$contaJaqueline ->nomedotitular = "Jaqueline Fernandes";
$contaJaqueline ->nuemeroConta = "12345678";
$contaJaqueline ->saldo = 60000;

echo "Tutular da conta: " .contaJaqueline->titular
echo "<br>" ;
echo $contaJaqueline ->exibirSaldo() . "<br><br>";
echo $contaJaqueline ->sacar(20) . "<br><br>";

