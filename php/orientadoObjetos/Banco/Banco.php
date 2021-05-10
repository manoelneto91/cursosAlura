<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};


require_once 'autoload.php';

$endereco = new Endereco('João da Silva', '123', 'Jardim Velho', 'Guaçu');
$manoel = new Titular(new Cpf('123.456.789-10'),'Manoel', $endereco);
$primeiraConta = new ContaCorrente($manoel);
$primeiraConta ->deposita(100);
$primeiraConta ->saca(30);

$eduarda = new Titular (new Cpf('987.654.321.-98'), 'Eduarda', $endereco);
$segundaConta = new ContaPoupanca($eduarda);
$segundaConta ->deposita(100);
$segundaConta -> saca(50);

echo $primeiraConta -> recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta ->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta -> recuperaSaldo() . PHP_EOL;

echo $segundaConta -> recuperaNomeTitular() . PHP_EOL;
echo $segundaConta ->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta -> recuperaSaldo() . PHP_EOL;

