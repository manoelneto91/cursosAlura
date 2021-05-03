<?php

$idade = 17;
$qtdePessoas = 1;

"Para entrar você deve ser maior de 18 ano ou maior de 16 acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade então pode entrar\n";
    echo "Pode entrar!!!";
} else {
    if ($idade >= 16 && $qtdePessoas > 1) {
        echo "Você é maior de 16 anos e está acompanhado" . PHP_EOL;
        echo "Pode entrar";
    } else if ($idade >= 16 && $qtdePessoas == 1) {
        echo "Você é maior de 16 anos, mas não está acompanhado" . PHP_EOL;
        echo "Você não pode entrar!!!";
    } else {
        echo "Você é menor de 16 anos" . PHP_EOL;
    }
}
