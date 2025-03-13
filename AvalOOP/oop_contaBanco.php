<?php

class Conta{
    public $titular;
    public $saldo;

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function setDepositar($valor){
        $this->saldo += $valor; 
    }

    public function setSacar($valor){
        $this->saldo -= $valor;
    }

    public function getConsultar(){
        echo 'Saldo: ' . $this->saldo . '<br>';
    }

}

$user1_conta = new Conta;
$user1_conta->setTitular('Nicolas');
$user1_conta->saldo = 10000;
$user1_conta->getConsultar();
$user1_conta->setDepositar(5000);
$user1_conta->getConsultar();
$user1_conta->setSacar(2500);
$user1_conta->getConsultar();

?>