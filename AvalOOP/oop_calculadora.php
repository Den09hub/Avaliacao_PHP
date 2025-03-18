<?php

// Definindo a classe de exceção personalizada para divisão por zero
class DivisionByZeroException extends Exception {}

// Definindo a classe Calculadora
class Calculadora {
    // Método dividir
    public function dividir($a, $b) {
        if ($b == 0) {
            // Lançando a exceção personalizada se o denominador for zero
            throw new DivisionByZeroException("Erro: Tentativa de dividir por zero.");
        }
        return $a / $b;
    }
}

// Classe principal onde o código será executado
try {
    // Criando uma instância da classe Calculadora
    $calculadora = new Calculadora();

    // Definindo os valores
    $a = 10;
    $b = 20; // Tentando dividir por zero

    // Chamando o método dividir
    $resultado = $calculadora->dividir($a, $b);

    // Exibindo o resultado
    echo "Resultado da divisão: " . $resultado;
} catch (DivisionByZeroException $e) {
    // Tratando a exceção e exibindo uma mensagem personalizada
    echo $e->getMessage();  // Exibe a mensagem da exceção
}

?>