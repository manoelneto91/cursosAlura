@extends('layout')

@section('cabecalho')
Alunos
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
    {{$mensagem}}
    </div>
    @endif
        <a href="{{route('criar_alunos')}}" class="btn btn-dark mb-2">Adicionar</a>
        <ul class="list-group">
            @foreach($alunos as $aluno)
                <li class="list-group-item d-flex justify-content-between align-items-center">{{$aluno->nome}}
                    <form method="post" action="/alunos/remover/{{$aluno->id}}"
                    onsubmit="return confirm('Tem certeza que deseja excluir o aluno {{$aluno->nome}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                    </form>
                </li>
             @endforeach
@endsection
