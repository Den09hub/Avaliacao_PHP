<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>

    <form method ="post">
        <label for="comprimento">Comprimento:</label>
        <input type="number" id="comprimento" name="comprimento" step="any"  required>
        <br><br>
        <label for="largura">Largura:</label>
        <input type="largura" id="largura" name="largura" required>
        <br><br>
        <input type="submit" value="Calcular">

    </form>

    <?php

        function calcular_area($comprimento, $largura) {
            return $comprimento * $largura;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $comprimento = $_POST['comprimento'];
            $largura = $_POST['largura'];

            $area = calcular_area($comprimento, $largura);
            echo "<h3>Resultado:</h3>";
            echo "A área do retângulo é: $area";
        }
    ?>
</body>
</html>  