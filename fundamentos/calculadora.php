<?php 

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacao = $_POST["operacao"];

switch ($operacao) {
    case "soma":
        $resultado = $num1 + $num2;
        $operador = '+';
        break;
    case "subtracao":
        $resultado = $num1 - $num2;
        $operador = '-';
        break;
    case "multiplicacao":
        $resultado = $num1 * $num2;
        $operador = 'x';
        break;
    case "divisao":
        $resultado = $num1 / $num2;  
        $operador = '/';
        break;          
    default:
        $resultado = "Operação Invalida";
};

echo "Resultado: $num1 $operador $num2 = $resultado";



