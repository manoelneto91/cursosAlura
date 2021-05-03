<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Impossivel depositar. O valor deve ser maior que 0!!!");
    }

    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Não há saldo suficiente! Tente um valor menor!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}
function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
