<x-app-layout>
    <x-slot name="body">
        <ul class="list-group">
            <table class="table table-striped table-bordered table-hover caption-top">
                <caption class="">Funcionários</caption>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $funcionarios as $funcionario )
                    <tr>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->cpf }}</td>
                        <td>
                            <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <table class="table table-striped table-bordered table-hover caption-top">
                <caption class="">Operadora</caption>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $operadoras as $operadora )
                    <tr>
                        <td>{{ $operadora->nome }}</td>
                        <td>{{ $operadora->cnpj }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <table class="table table-striped table-bordered table-hover caption-top">
                <caption class="">Cartões</caption>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Número</th>
                    <th>Operadora</th>
                    <th>Saldo</th>
                    <th>Validade</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $funcionarios as $funcionario )
                    @foreach( $funcionario->cartoes as $cartao )
                        <tr>
                            <td>{{ $funcionario->nome }}</td>
                            <td>{{ $cartao->numero }}</td>
                            <td>{{ $cartao->operadora->nome }}</td>
                            <td>R$ {{ $cartao->saldo }}</td>
                            <td>{{ join("/", array_reverse(explode("-", $cartao->validade))) }}</td>
                        </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
            {{--            <li class="list-group-item d-flex justify-content-between">TItular do Cartao : {{ $funcionario->nome }}</li>--}}
            {{--            <li class="list-group-item d-flex justify-content-between">CPF: {{ $funcionario->cpf }}</li>--}}

            {{--            <ul class="list-group">--}}
            {{--                @foreach( $funcionario->cartoes as $cartao )--}}
            {{--                    <li class="list-group-item d-flex justify-content-between">CARTAO {{ $cartao->operadora->nome }}</li>--}}
            {{--                    <li class="list-group-item d-flex justify-content-between">FINAL {{ $cartao->numero }}</li>--}}
            {{--                    <li class="list-group-item d-flex justify-content-between">SALDO: R$ {{ $cartao->saldo }}</li>--}}
            {{--                @endforeach--}}
            {{--            </ul>--}}

            {{--            <form action="{{ route('funcionario.destroy', $funcionario->id) }}" method="post">--}}
            {{--                @csrf--}}
            {{--                <button type="submit" class="btn btn-danger">Deletar</button>--}}
            {{--            </form>--}}

        </ul>
    </x-slot>
</x-app-layout>
