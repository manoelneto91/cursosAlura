package com.company;

public class Main {

    public static void main(String[] args) {
	ContaCorrente cc = new ContaCorrente(001,001);
	ContaPoupanca cp = new ContaPoupanca(001,002);

	cc.deposita(100);
	cp.deposita(100);
	cc.transfere(10,cp);

        System.out.printf("Saldo da Conta Corrente: R$ %.2f\n", cc.getSaldo());
        System.out.printf("Saldo da Conta Poupança: R$ %.2f\n", cp.getSaldo());
    }
}
