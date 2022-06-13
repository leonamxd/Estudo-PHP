<?php
$numero = 11;

if (!($numero >= 10)) {
    echo "Condição verdadeira"."<br>";
}else {
    echo "Condição falsa"."<br>";
}

// TERNARIO

$media = 7;

echo ($media >= 7) ? "Aprovado!"."<br>" : "Reprovado!"."<br>";

// SWITCH

$valor = 3;

switch ($valor) {
    case 1:
        echo "Valor igual a 1"."<br>";
        break;
    case 2:
        echo "Valor igual a 2"."<br>";
        break;
    case 3:
        echo "Valor igual a 3"."<br>";
        break;
    
    default:
        echo "Valor Invalido"."<br>";
        break;
}