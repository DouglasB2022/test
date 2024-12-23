<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastra Operadora</title>
</head>
<body>
    <h1>Página de Cadastros da Operadora</h1>
    <a href="{{ route('funcionario.index') }}">Home</a>
    <form action="{{ route('operadora.store') }}" method="post">
        @csrf
        <label>
            <input type="number" name="cpnj" placeholder="CNPJ">
        </label><br>
        <label>
            <input type="text" name="nome" placeholder="Nome">
        </label><br>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>
</html>
