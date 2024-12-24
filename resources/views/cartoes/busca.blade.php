<x-app-layout>
    <x-slot name="body">

        <form action="{{ route('cartao.recupera') }}" method="post" class="form-control">
            @csrf
            <input class="form-control mt-2" type="number" name="numero" placeholder="Digite numero do cartao ">
            <button type="submit" class="btn btn-primary mt-2">Buscar</button>
        </form>
        @isset($listaCartao)
            <table class="table table-striped table-bordered table-hover caption-top mt-2">
                <caption>Dados do cartão</caption>
                <thead class="small">
                <tr>
                    <th colspan="2">Funcionário</th>
                    <th colspan="2">Operadora</th>
                    <th colspan="3">Cartão</th>
                </tr>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Número</th>
                    <th>Validade</th>
                    <th>Saldo</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $listaCartao as $cartao )
                    <tr>
                        <td>{{ $cartao->funcionario->nome }}</td>
                        <td>{{ $cartao->funcionario->cpf }}</td>
                        <td>{{ $cartao->operadora->nome }}</td>
                        <td>{{ $cartao->operadora->cnpj }}</td>
                        <td>{{ $cartao->numero }}</td>
                        <td>{{ join("/",array_reverse(explode("-",$cartao->validade))) }}</td>
                        <td>R$ {{ $cartao->saldo }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endisset
    </x-slot>
</x-app-layout>
