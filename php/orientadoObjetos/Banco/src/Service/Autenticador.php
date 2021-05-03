<?php


namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha)
    {
        if($autenticavel ->podeAutenticar($senha)){
            echo "Usuario Autenticado!!!!";
        }else{
            echo "Senha invalida!!!!";
        }
    }
}