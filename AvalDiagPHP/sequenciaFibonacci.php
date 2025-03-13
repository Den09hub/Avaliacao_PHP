<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <h2>10 Primeiros Números da Sequência de Fibonacci</h2>

    <?php
    function fibonacci($n) {
        $fib = [0, 1];
        for ($num = 2; $num < $n; $num++) {
            $fib[$num] = $fib[$num-1] + $fib[$num-2]; 
        }
        return $fib;
    }

    $n = 10;
    $sequencia = fibonacci($n);
    echo "Os 10 primeiros números da sequência de Fibonacci são: <br>";
    echo implode(", ", $sequencia);
    ?>
</body>
</html>