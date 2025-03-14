<?php

class Animal{
    public function fazerSom($som){
        public $nome;
    }
}

class Cachorro extends Animal{
    public function somDog{
        echo "AU AU";
    }
}

class Gato extends Animal{
    public function somCat{
        echo "MIAU";
    }
}

$cachorro1 = new Cachorro;
$cachorro1->somDog();

$gato1 = new Gato; 
?>