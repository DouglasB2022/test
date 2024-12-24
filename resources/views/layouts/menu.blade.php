<div class="row">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">Home</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('funcionario.create') || request()->routeIs('operadora.create') || request()->routeIs('cartao.create') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('funcionario.create') ? 'active' : '' }}" href="{{ route('funcionario.create') }}">Funcionário</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('operadora.create') ? 'active' : '' }}" href="{{ route('operadora.create') }}">Operadora</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('cartao.create') ? 'active' : '' }}" href="{{ route('cartao.create') }}">Cartão</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('cartao.show') ? 'active' : '' }}" href="{{ route('cartao.show') }}">Buscador de Dados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
