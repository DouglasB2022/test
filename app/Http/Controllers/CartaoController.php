<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Models\Funcionario;
use App\Models\Operadora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartaoController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        $listaDeFuncionarios = Funcionario::all();
        $listaDeOperadoras = Operadora::all();
        return view('cartoes.create', compact('listaDeFuncionarios', 'listaDeOperadoras'));
    }


    public function store(Request $request)
    {

        Cartao::create([
            'numero' => $request->numero,
            'saldo' => $request->saldo,
            'validade' => $request->validade,
            'funcionario_id' => $request->funcionario_id,
            'operadora_id' => $request->operadora_id
        ]);

        return redirect()->route('index');

    }


    public function show(Request $request)
    {
        if ($request->method() == 'POST') {
            $listaCartao = Cartao::with(['funcionario', 'operadora'])
                ->where('numero', $request->numero)
                ->get();
        }

        return view('cartoes.busca', [$listaCartao ?? null]);
    }


    public function recupera(Request $request)
    {

        $listaCartao = Cartao::with(['funcionario', 'operadora'])
            ->where('numero', $request->numero)
            ->get();


        return view('cartoes.busca', compact('listaCartao'));
    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }
}
