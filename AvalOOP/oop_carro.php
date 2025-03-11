<?php

class Carro{
    public $marca;
    public $modelo;
    public $ano_fabricacao;

    public function exibirInfo($marca, $modelo, $ano_fabricacao){
        echo "Marca: " . $marca . "<br>";
        echo "Modelo: " . $modelo . "<br>";
        echo "Ano fabricação: " . $ano_fabricacao . "<br>";
    }
}

$carro = new Carro;
$carro->exibirInfo("Toyota", "Yaris Sedã", "2018")

?>