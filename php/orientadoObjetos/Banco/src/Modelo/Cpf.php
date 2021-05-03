<?php

namespace Alura\Banco\Modelo;

class Cpf
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function recuperaNumero()
    {
        return $this->numero;
    }
}