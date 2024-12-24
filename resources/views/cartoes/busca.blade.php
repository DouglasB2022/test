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
<h1>Busca dos Cartoes</h1>
<a href="{{ route('index') }}">VOLTAR</a>

        <form action="{{ route('cartao.recupera') }}" method="post" class="form-control">
            @csrf
            <label>
                <input type="number" name="numero" placeholder="Digite numero do cartao ">
            </label><br>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    <ul>
        <h6>DADOS DO CARTAO</h6>
        @foreach( $listaCartao as $cartao )
            <li>Titular: {{ $cartao->funcionario->nome }}</li>
            <li>CPF: {{ $cartao->funcionario->cpf }}</li>
            <li>OPERDORA: {{ $cartao->operadora->nome }}</li>
            <li>CNPJ: {{ $cartao->operadora->cnpj }}</li>
            <li>NUMERO: {{ $cartao->numero }}</li>
            <li>VALIDADE: {{ $cartao->validade }}</li>
        @endforeach
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
