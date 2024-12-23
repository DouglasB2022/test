<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastra Cartoes</title>
</head>
<body>
<h1>Página de Cadastros dos cartões</h1>
<a href="{{ route('index') }}">Home</a>
<form action="{{ route('cartao.store') }}" method="post">
    @csrf
    <label>
        <input type="number" name="numero" placeholder="Numero">
    </label><br>
    <label>
        <input type="number" name="saldo" placeholder="Saldo">
    </label><br>

    <label>
        <input type="month" name="validade" placeholder="Validade">
    </label><br>

    <label>
        <select name="funcionario_id" required>
            <option value="">Selecione</option>
            @foreach($listaDeFuncionarios as $funcionario)
                <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
            @endforeach
        </select>
        {{--            <input type="month" name="saldo" placeholder="Funcionario">--}}
    </label><br>
    <label>
        <select name="operadora_id" required>
            <option value="">Selecione</option>
            @foreach($listaDeOperadoras as $operadora)
                <option value="{{ $operadora->id }}">{{ $operadora->nome }}</option>
            @endforeach
        </select>
        {{--            <input type="month" name="saldo" placeholder="OPeradora">--}}
    </label><br>
    <button type="submit">
        Enviar
    </button>
</form>
</body>
</html>
