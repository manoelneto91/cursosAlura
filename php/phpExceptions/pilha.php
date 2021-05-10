<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
        echo 'Saindo da função 1' . PHP_EOL;
    }catch (RuntimeException | DivisionByZeroError $erro){
        echo "Erro na função 2, resolvido na função 1 " . PHP_EOL;
        echo $erro->getMessage() . PHP_EOL;
        echo $erro->getCode() . PHP_EOL;
        echo $erro->getTraceAsString() . PHP_EOL;
        throw new RuntimeException('Erro tratado', 1, $erro);

}
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    //ERRO 1 - DivisionByZeroError
    //$divisaoPor0 = 5 / 0; FUNCIONOU, APARECEU A MENSAGEM DE ERRO CATCH

    //ERRO 2 - RuntimeException
    //$arrayErro = new SplFixedArray(2);
    //$arrayErro[3] = 'Valor'; //FUNCIONOU TBM

    $exception = new RuntimeException('AAAAAAAAA');
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;

}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
