<?php

class Contabancaria { //classe, istruturando uma informação, estrutura para ajudar os objetos

    //Atributos

    public $nomedotitular; //Publico 
    protected $numeroConta; //Protegido
    public $saldo; //publico

    //Metodo:
    public function exibirSaldo(){
        return "O saldo da conta é: " .$this->saldo;
        //"O número da conta é: " .$this->numeroConta.
        //"O nome do Titular é: " .$this->nomedotitular;
    }

    public function depositar (){
        
    }
    public function sacar (){
        
    }
    
} //fechando classe

$contaKamilly = new ContaBancaria(); 
$contaKamilly ->nomedotitular = "Kamilly Silva";
$contaKamilly ->nuemeroConta = "28082007";
$contaKamilly ->saldo = 100000000000000000;

echo "Conta Kamilly: <br>";
echo $contaKamilly ->exibirSaldo() . "<br><br>";

$contaStefany = new ContaBancaria();
$contaStefany ->nomedotitular = "Stefany freire";
$contaStefany ->nuemeroConta = "08102001";
$contaStefany ->saldo = 80000000000000;

echo "Conta Stefany: <br>";
echo $contaStefany ->exibirSaldo() . "<br><br>";


$contaJaqueline = new ContaBancaria();
$contaJaqueline ->nomedotitular = "Jaqueline Fernandes";
$contaJaqueline ->nuemeroConta = "12345678";
$contaJaqueline ->saldo = 60000;

echo "Conta Jaqueline: <br>";
echo $contaJaqueline ->exibirSaldo() . "<br><br>";


