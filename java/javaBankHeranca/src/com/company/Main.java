package com.company;

public class Main {

    public static void main(String[] args) {
	Gerente g1 = new Gerente();
	g1.setNome("Manoel");
	g1.setCpf("123.456.789.01");
	g1.setSalario(5000);

        System.out.println(g1.getNome());
        System.out.println(g1.getCpf());
        System.out.println(g1.getSalario());

        EditorDeVideo ev = new EditorDeVideo();
        ev.setSalario(2500);
        Designer d = new Designer();
        d.setSalario(2000);

        ControleBonificacao controle = new ControleBonificacao();
        controle.regitra(g1);
        controle.regitra(ev);
        controle.regitra(d);

        System.out.println(controle.getSoma());

        //******* TESTE INTERFACE *****
        Gerente g = new Gerente();
        g.setSenha(2222);

        Administrador adm = new Administrador();
        adm.setSenha(3333);

        Cliente cliente = new Cliente();
        cliente.setSenha(2222);

        SistemaInterno si = new SistemaInterno();
        si.autentica(g);
        si.autentica(adm);
        si.autentica(cliente);
    }
}
