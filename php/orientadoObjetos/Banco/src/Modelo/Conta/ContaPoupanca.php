<?php


namespace Alura\Banco\Modelo\Conta;


class ContaPoupanca extends conta
{
    public function percentualTarifa() : float
    {
        return 0.03;
    }
}