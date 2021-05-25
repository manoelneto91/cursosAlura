package com.company;

public class Main {

    public static void main(String[] args) {
        int idade = 17;
        double salario = 1250.70;
        int quantidadePessoas = 2;
        boolean acompanhado;
        int valor;
        int contador = 0;

        valor = (int)salario; //Forçando conversão de double para int

        if(quantidadePessoas > 1){
            acompanhado = true;
        }
        else{
            acompanhado = false;
        }

       if (idade >= 18 || acompanhado){
           System.out.println("Pode entrar!!!");
       }
       else{
           System.out.println("Você tem menos de 18 anos, e não está acopanhado" +
                   " não pode entrar!!!");
       }

       //LAÇOS DE REPETIÇÕES

        System.out.println("**** CONTADOR COM WHILE ****");
        while (contador <= 10){
            System.out.println(contador);
            contador++;
        }

        System.out.println("**** CONTADOR COM FOR ****");
        for (contador = 0; contador <=10; contador++){
            System.out.println(contador);
        }
    }
}
