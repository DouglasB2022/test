<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Cadastro</title>
</head>
<body>
    <h1>Página do Funcionário</h1>
    <a href="{{ route('create') }}">Cadastra Funcionario</a>
    <a href="{{ route('create') }}">Cadastra Cartoes</a>
    <a href="{{ route('create') }}">Cadastra Operadoras</a>
    <ul>
        @foreach( $funcionarios as $funcionario )
            <li>Nome: {{ $funcionario->nome }}</li>
            <li>CPF: {{ $funcionario->cpf }}</li>
            <li>Cartao: {{ $funcionario->cartao }}</li>
            <li>Operadora: {{ $funcionario->operadora }}</li>
            <button >Deletar</button>
        @endforeach
    </ul>
</body>
</html>
