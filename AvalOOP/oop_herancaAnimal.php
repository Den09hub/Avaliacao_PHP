<?php
/*
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
*/
?>

<!-- CORREÇÃO -->

<?php

// Classe Animal
class Animal {
    // Método fazerSom que será sobrescrito pelas classes filhas
    public function fazerSom() {
        echo "Som do animal\n";
    }
}

// Classe Cachorro que herda de Animal
class Cachorro extends Animal {
    // Sobrescreve o método fazerSom
    public function fazerSom() {
        echo "Au Au\n";
    }
}

// Classe Gato que herda de Animal
class Gato extends Animal {
    // Sobrescreve o método fazerSom
    public function fazerSom() {
        echo "Miau\n";
    }
}

// Criando objetos das classes Cachorro e Gato
$cachorro = new Cachorro();
$gato = new Gato();

// Chamando o método fazerSom() para cada objeto
$cachorro->fazerSom(); // Saída: Au Au
$gato->fazerSom();     // Saída: Miau

?>