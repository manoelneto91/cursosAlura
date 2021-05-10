<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

require_once 'autoload.php';

$umaFuncionaria = new Gerente('Patricia', new CPF('987.654.321-10'), 'Gerente',3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();