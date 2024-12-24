<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de Cadastro</title>
</head>
<body>
    <h1>Página do Funcionário</h1>
    <nav class="nav">
    <a href="{{ route('funcionario.create') }}" class="nav-link active">Cadastra Funcionario</a>
    <a href="{{ route('cartao.create') }}" class="nav-link">Cadastra Cartao</a>
    <a href="{{ route('operadora.create') }}" class="nav-link">Cadastra Operadora</a>
    <a href="{{ route('cartao.show') }}" class="nav-link">Buscador de Dados</a>
    </nav>
{{--    <ul class="list-group">--}}
{{--        OPERADORAS--}}
{{--        @foreach( $operadoras as $operadora )--}}
{{--            <li>{{ $operadora->nome }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
    <ul class="list-group">FUNCIONARIOS
        @foreach( $funcionarios as $funcionario )
            <li class="list-group-item d-flex justify-content-between">TItular do Cartao : {{ $funcionario->nome }}</li>
            <li class="list-group-item d-flex justify-content-between">CPF: {{ $funcionario->cpf }}</li>

            <ul class="list-group">
                @foreach( $funcionario->cartoes as $cartao )
                    <li class="list-group-item d-flex justify-content-between">CARTAO {{ $cartao->operadora->nome }}</li>
                    <li class="list-group-item d-flex justify-content-between">FINAL {{ $cartao->numero }}</li>
                    <li class="list-group-item d-flex justify-content-between">SALDO: R$ {{ $cartao->saldo }}</li>
                @endforeach
            </ul>

            <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        @endforeach
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
