<?php

$conta1 = [
    'titular' => 'Manoel',
    'saldo' => 'R$ 1000,00'
];

$conta2 = [
    'titular' => 'Eduarda',
    'saldo' => 'R$ 2000,00'
];

$conta3 = [
    'titular' => 'Francisco',
    'saldo' => 'R$ 30000,00'
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
