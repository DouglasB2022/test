<x-app-layout>
    <x-slot name="body">
        <form action="{{ route('funcionario.store') }}" method="post" class="form-control">
            @csrf
            <input type="text" name="nome" class="form-control mt-2" placeholder="Nome">
            <input type="text" name="cpf" class="form-control mt-2" placeholder="CPF">
            <button type="submit" class="btn btn-primary mt-2">
                Enviar
            </button>
        </form>
    </x-slot>
</x-app-layout>
