<?php

class Calculadora{
    public function calculaMedia (array $notas) : ?float
    {
        echo "to dentro";
        $quantidadeNotas = sizeof($notas);
        if ($quantidadeNotas !== 0){
        for ($i=0; $i<quantidadeNotas; $i++)
        {
            $soma += $notas[$i];
        }

        $media = $soma / $quantidadeNotas;

        return media;
    }else{
        return null;
    }
    }
}