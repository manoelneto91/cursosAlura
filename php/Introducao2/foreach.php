<?php

$contasCorrentes = [
    '151.000.569-00' => [
        'titular' => 'Manoel',
        'saldo' => 1000
    ],

    '151.000.569-01' => [
        'titular' => 'Eduarda',
        'saldo' => 2000
    ],

    '151.000.569-02' => [
        'titular' => 'Francisco',
        'saldo' => 30000
    ]
];

foreach ($contasCorrentes as $cpf => $contas) {
    echo $cpf . " " . $contas['titular'] . PHP_EOL;
}
