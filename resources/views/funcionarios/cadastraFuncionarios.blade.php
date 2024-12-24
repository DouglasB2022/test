<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastra Funcionario</title>
</head>
<body>
    <h1>Página de Cadastros dos Funcionários</h1>
    <a href="{{ route('index') }}" class="">VOLTAR</a>
    <form action="{{ route('funcionario.store') }}" method="post" class="form-control">
        @csrf
        <label>
            <input type="text" name="nome" placeholder="Nome">
        </label><br>
        <label>
            <input type="text" name="cpf" placeholder="CPF">
        </label><br>
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
