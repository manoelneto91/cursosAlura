package com.company;

public class Main {

    public static void main(String[] args) {
        double salario = 4000;
        double valorIr;

        if (salario >= 2100 && salario < 2800){
            valorIr = (salario - 142) * 0.075;
        }
        else if(salario >= 2800 && salario < 3751){
            valorIr = (salario - 350) * 0.15;
        }
        else{
            valorIr = (salario - 350) * 0.225;
        }

        System.out.printf("R$: %.2f", valorIr);
    }
}
