@extends('layout')

@section('cabecalho')
Alunos
@endsection

@section('conteudo')
        <a href="/alunos/criar" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            @foreach($alunos as $aluno)
                <li class="list-group-item">{{$aluno->nome}}</li>
             @endforeach
@endsection
