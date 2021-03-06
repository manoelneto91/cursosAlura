<?php

namespace Alura\Banco\Modelo;

class Endereco{
    private string $rua;
    private string $numero;
    private string $bairro;
    private string $cidade;

    public function __construct(string $rua, string $numero, string $bairro, string $cidade)
    {
        $this -> rua = $rua;
        $this -> numero = $numero;
        $this -> bairro = $bairro;
        $this -> cidade = $cidade;
    }

    /**
     * @return string
     */
    public function recuperaRua(): string
    {
        return $this->rua;
    }

    /**
     * @return string
     */
    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    /**
     * @return string
     */
    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @return string
     */
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }
}