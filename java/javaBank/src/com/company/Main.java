package com.company;

public class Main {

    public static void main(String[] args) {
	    Conta contaDoManoel = new Conta();
	    contaDoManoel.deposita(10000);
        System.out.printf("Saldo conta Manoel: R$ %.2f\n", contaDoManoel.saldo);
        contaDoManoel.saca(1000);
        System.out.printf("Saldo conta Manoel depois do saque: R$ %.2f\n", contaDoManoel.saldo);

        Conta contaDaEduarda = new Conta();
        contaDaEduarda.deposita(15000);
        System.out.printf("Saldo conta Eduarda: R$ %.2f\n", contaDaEduarda.saldo);
        contaDaEduarda.transfere(5000, contaDoManoel);
        System.out.printf("Saldo conta Eduarda depois da transferencia: R$ %.2f\n", contaDaEduarda.saldo);
        System.out.printf("Saldo Conta Manoel depois do saque e da transferencia: R$ %.2f\n", contaDoManoel.saldo);

        contaDoManoel.titular = new Cliente();
        contaDoManoel.titular.nome = "Manoel";
        contaDoManoel.titular.cpf = "123.456.789-01";
        contaDoManoel.titular.profissao = "Desenvolvedor";
        System.out.println(contaDoManoel.titular.nome);

        contaDaEduarda.titular = new Cliente();
        contaDaEduarda.titular.nome = "Eduarda";
        contaDaEduarda.titular.cpf = "987.654.321-09";
        contaDaEduarda.titular.profissao = "Gerente";
        System.out.println(contaDaEduarda.titular.nome);
    }
}
