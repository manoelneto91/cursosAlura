<?php

$altura = 1.71;
$peso = 80;
$imc =  $peso / ($altura ^ 2);

echo "Indice de Massa Corporal (IMC). Para o calculo do IMC é necessario 
entrar com peso e altura. Será calculado o IMC e será exibido em qual categoria 
se encontra" . PHP_EOL . PHP_EOL . PHP_EOL;

if ($imc < 0) {
    echo "Algo deu errado!!! Tente novamente" . PHP_EOL;
} else {

    if ($imc < 18.5) {
        echo "Valor do IMC: $imc" . PHP_EOL;
        echo "Abaixo do peso!" . PHP_EOL;
    } else if ($imc <= 24.9) {
        echo "Valor do IMC: $imc" . PHP_EOL;
        echo "Peso normal" . PHP_EOL;
    } else if ($imc <= 29.9) {
        echo "Valor do IMC: $imc" . PHP_EOL;
        echo "Sobrepeso" . PHP_EOL;
    } else if ($imc <= 34.9) {
        echo "Valor do IMC: $imc" . PHP_EOL;
        echo "Obesidade Grau 1" . PHP_EOL;
    } else if ($imc <= 39.9) {
        echo "Valor do IMC: $imc" . PHP_EOL;
        echo "Obesidade Grau 2" . PHP_EOL;
    } else {
        echo "Valor do IMC: $imc" . PHP_EOL;
        echo "Obesidade Grau 3" . PHP_EOL;
    }
}
