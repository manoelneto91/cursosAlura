<?php


namespace App\Http\Controllers;


use App\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function listarAlunos()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());

        echo "ALuno criado com ID: {$aluno->id} e nome {$aluno->nome}";
    }
}
