<x-app-layout>
    <x-slot name="body">
        <form action="{{ route('operadora.store') }}" method="post" class="form-control">
            @csrf
            <input class="form-control mt-2" type="number" name="cnpj" placeholder="CNPJ">
            <input class="form-control mt-2" type="text" name="nome" placeholder="Nome">
            <button type="submit" class="btn btn-primary mt-2">
                Enviar
            </button>
        </form>
    </x-slot>
</x-app-layout>
