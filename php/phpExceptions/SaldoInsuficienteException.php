<?php


class SaldoInsuficienteException extends DomainException
{
public function __construct(float $valorSaque, float $valorAtual)
{
    $messagem = "Você esta tentando sacar R$ $valorSaque, mas seu saldo em conta é de apenas R$ $valorAtual ";
    parent::__construct($messagem);
}
}