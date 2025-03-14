<?php

class Animal{
    public function fazerSom(){
        echo "Som genérico do animal";
    }
}

class Cachorro extends Animal{
    public function fazerSom(){
        echo 'Au au' . '<br>';
    }
}

class Gato extends Animal{
    public function fazerSom(){
        echo 'Miau' . '<br>';
    }
}

$cachorro1 = new Cachorro;
$gato1 = new Gato; 

$cachorro1->fazerSom();
$gato1->fazerSom();
?>