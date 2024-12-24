<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastra Cartoes</title>
</head>
<body>
    <h1>Página de Cadastros dos Cartões</h1>
    <a href="{{ route('index') }}">VOLTAR</a>
    <form action="{{ route('cartao.store') }}" method="post" class="form-control">
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
        </label><br>
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
