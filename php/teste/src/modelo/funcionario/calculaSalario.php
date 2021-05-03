<?php

namespace Manoel\Teste\Modelo\Funcionario;
class calculaSalario
{
    private string $nome;
    private string $cargo;
    private string $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {
        $this -> nome = $nome;
        $this -> cargo = $cargo;
        $this -> salario = $salario;
    }

    /**
     * @return float|string
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * @param string $cargo
     */
    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }



    public function calculaAumento() : float
    {
        $salarioAtualizado = $this->salario * 1.11;
        if ($salarioAtualizado < 1500){
            $salarioAtualizado += 500;
            return $salarioAtualizado;
        }else{
            return $salarioAtualizado;
        }
    }

}