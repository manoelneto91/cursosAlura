<?php


namespace App\Http\Controllers;


use App\Aluno;
use App\Http\Requests\AlunosFormRequest;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function listarAlunos(Request $request)
    {
        $alunos = Aluno::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('alunos.index', compact('alunos', 'mensagem'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunosFormRequest $request)
    {
        $aluno = Aluno::create($request->all());

        $request->session()->flash('mensagem', "Aluno {$aluno->id} adicionado com sucesso {$aluno->nome}");
        return redirect()->route('listar_alunos');
    }

    public function destroy(Request $request)
    {
        Aluno::destroy($request->id);
        $request->session()->flash('mensagem', "Aluno removido com sucesso!!!");
        return redirect()->route('listar_alunos');
    }
}
