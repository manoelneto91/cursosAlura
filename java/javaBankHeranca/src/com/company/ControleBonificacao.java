package com.company;

public class ControleBonificacao {

    double soma;

    public void regitra(Funcionario f){
        this.soma += f.getBonificacao();
    }
    public double getSoma(){
        return this.soma;
    }
}
