<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Funcionario;

class ControladordeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario) : void
    {
        $this ->totalBonificacoes += $this ->adicionaBonificacaoDe();
    }

    public function recuperaTotal() : float
    {
        return $this ->totalBonificacoes;
    }
}