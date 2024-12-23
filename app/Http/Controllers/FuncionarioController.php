<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{

    public function index()
    {

        $funcionarios = Funcionario::query()->orderBy('nome')->get();

        return view('funcionarios.layout')->with('funcionarios', $funcionarios);
    }


    public function create()
    {

        return view('funcionarios.cadastraFuncionarios');
    }


    public function store(Request $request )
    {
        Funcionario::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf
        ]);

        return to_route('funcionario.index');
    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(Request $request)
{
        Funcionario::destroy($request->id);

        return to_route('funcionario.index');
    }
}
