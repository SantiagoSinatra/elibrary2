<div class="container-fluid nav-div">
    <div class="row">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
        <a class="navbar-brand" href="/">Elibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav nav-center">

                <a class="nav-item nav-link active" href="/">Inicio <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/categorias">Categorias</a>
                <a class="nav-item nav-link" href="/productos">Ver Productos</a>

                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                    </li>
                    @if (Auth::User()->id == 1)
                    <a class="nav-item nav-link" href="/editar">Administrar</a>
                    @endif
                    <a class="nav-item nav-link" href="/vender">Vender</a>

                @endguest

            </div>
        </div>
    </nav>
</div>

</div>
