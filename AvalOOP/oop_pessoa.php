<?php

class Pessoa{
    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function falar(){
        echo "Olá! Como você está?" . "<br><br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Sexo: " . $this->sexo . "<br>";
    }
}

$user1 = new Pessoa('Nicolas', '17', 'Masculino');
$user1->falar();

?>