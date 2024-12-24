<!doctype html>
<x-app-layout>
    <x-slot name="body">
        <form action="{{ route('cartao.store') }}" method="post" class="form-control">
            @csrf
            <input class="form-control mt-2" type="number" name="numero" placeholder="Numero">
            <input class="form-control mt-2" type="number" name="saldo" placeholder="Saldo">
            <input class="form-control mt-2" type="month" name="validade" placeholder="Validade">
            <select name="funcionario_id" class="form-control mt-2" required>
                <option value="">Selecione</option>
                @foreach($listaDeFuncionarios as $funcionario)
                    <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                @endforeach
            </select>
            <select name="operadora_id" class="form-control mt-2" required>
                <option value="">Selecione</option>
                @foreach($listaDeOperadoras as $operadora)
                    <option value="{{ $operadora->id }}">{{ $operadora->nome }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-2">
                Enviar
            </button>
        </form>
    </x-slot>
</x-app-layout>
