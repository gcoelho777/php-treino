<?php 

function converterMoedas($valor, $taxaCambio)
{
    return $valor * $taxaCambio;
}

$valorDolar = 100;
$taxaReal = 6.31; // 1 real = 0,2 dól

$valorConvertido = converterMoedas($valorDolar, $taxaReal);

echo "$ $valorDolar equivalem a $valorConvertido reais";