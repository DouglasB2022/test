<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionarios::query()->orderBy('nome')->get();

        return view('layout')->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('cadastraFuncionarios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Funcionarios $funcionarios)
    {
        $funcionarios = $request;
        $funcionarios = Funcionarios::query()->insert('nome', 'cpf', 'cartao', 'operadora');

        return redirect('layout')->with('request', $request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
