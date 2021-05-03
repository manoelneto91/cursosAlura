<?php

require_once "funcoes.php";

$contasCorrentes = [
    '151.000.569-00' => [
        'titular' => 'Manoel',
        'saldo' => 10000
    ],

    '151.000.569-01' => [
        'titular' => 'Eduarda',
        'saldo' => 300
    ],

    '151.000.569-02' => [
        'titular' => 'Francisco',
        'saldo' => 100
    ]
];

$contasCorrentes['151.000.569-00'] = sacar($contasCorrentes['151.000.569-00'], 500);
$contasCorrentes['151.000.569-01'] = sacar($contasCorrentes['151.000.569-01'], 200);
$contasCorrentes['151.000.569-02'] = depositar($contasCorrentes['151.000.569-02'], 900);
titularComLetrasMaiusculas($contasCorrentes['151.000.569-00']);

unset($contasCorrentes['151.000.569-02']);

/*foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}*/
/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";*/
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>