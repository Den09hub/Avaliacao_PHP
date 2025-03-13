<?php
function removerVogais($string) {
    $stringSemVogais = preg_replace('/[aeiouAEIOU]/', '', $string);
    return $stringSemVogais;
}

$texto = "programação orientado a objetos";
$resultado = removerVogais($texto);
echo $resultado;
?>