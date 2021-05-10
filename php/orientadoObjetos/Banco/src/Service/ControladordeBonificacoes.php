<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladordeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this ->totalBonificacoes += $funcionario ->adicionaBonificacaoDe();
    }

    public function recuperaTotal() : float
    {
        return $this ->totalBonificacoes;
    }
}