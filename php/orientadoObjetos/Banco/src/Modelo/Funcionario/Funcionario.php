<?php

namespace Alura\Banco\Modelo\Funcionario;

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this -> cargo = $cargo;
        $this -> salario = $salario;
    }

    /**
     * @return string
     */
    public function retornaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome($nome)
    {
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;
    }

    public function recuperaSalario()
    {
        $this ->salario;
    }
}