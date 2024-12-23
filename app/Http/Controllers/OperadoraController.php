<?php

namespace App\Http\Controllers;

use App\Models\Operadora;
use Illuminate\Http\Request;

class OperadoraController extends Controller
{
    public function index()
    {

    }


    public function create()
    {
        return view('operadoras.cadastraOperadoras');
    }


    public function store(Request $request)
    {

        Operadora::create([
            'cnpj' => $request->cnpj,
            'nome' => $request->nome
        ]);
        return to_route('funcionario.index');
    }


    public function show()
    {

    }


    public function edit()
    {

    }


    public function update()
    {

    }


    public function destroy(string $id)
    {

    }
}
