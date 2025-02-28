<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="identificador_idade.php" method="GET">
        <h3>Qual sua idade?</h3>
        <input type="number" name="idade" type="submit" placeholder="idade"> <br> <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>

<?php

$user_idade = $_GET['idade'];

if ($user_idade >= 18 && $user_idade <= 59){
    echo "<br>";
    echo "O usuário é maior de idade";
} else if($user_idade >= 0 && $user_idade <= 17){
    echo "<br>";
    echo "O usuário é menor de idade";
} else if($user_idade >= 60){
    echo "<br>";
    echo "O usuário é maior de idade e idoso";
} else if($user_idade <= 0){
    echo "<br>";
    echo "Ser inexistente";
} else{
    echo "<br>";
    echo "Inválido. Digite uma idade";
}

?>