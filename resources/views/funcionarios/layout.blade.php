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
<a href="{{ route('funcionario.create') }}">Cadastra Funcionario</a>
<a href="{{ route('cartao.create') }}">Cadastra Cartao</a>
<a href="{{ route('operadora.create') }}">Cadastra Operadoras</a>
<ul>
    OPERADORAS
    @foreach( $operadoras as $operadora )
        <li>{{ $operadora->nome }}</li>
    @endforeach
</ul>

<ul>
    @foreach( $funcionarios as $funcionario )
        <li>Nome: {{ $funcionario->nome }}</li>
        <li>CPF: {{ $funcionario->cpf }}</li>
        Cartoes
        <ul>
            @foreach( $funcionario->cartoes as $cartao )
            <li>{{ $cartao->operadora->nome }} final {{ $cartao->numero }}: R$ {{ $cartao->saldo }}</li>
            @endforeach
        </ul>

        <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="post">
            @csrf
            <button type="submit">Deletar</button>
        </form>
    @endforeach
</ul>
</body>
</html>
