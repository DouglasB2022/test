<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastra Funcionario</title>
</head>
<body>
    <h1>Página de Cadastros dos Funcionários</h1>
    <a href="{{ route('index') }}">Home</a>
    <form action="{{ route('store') }}" method="post">
        @method('PUT')
        @csrf
        <label>
            <input type="text" name="nome" placeholder="Nome">
        </label><br>
        <label>
            <input type="text" name="cpf" placeholder="CPF">
        </label><br>
        <label>
            <input type="text" name="cartao" placeholder="Cartao">
        </label><br>
        <label>
            <input type="text" name="operadora" placeholder="Operadora">
        </label>
        <button type="submit">
            Enviar
        </button>
    </form>
</body>
</html>
