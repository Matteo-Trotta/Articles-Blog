<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        @auth


            <a class="navbar-brand" href="{{ route('homepage') }}">HomePage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#">Benvenuto , {{ Auth::user()->name }}</a>
                    </li>
                    {{-- LOGOUT --}}
                    <li>
                        <a href="#"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">LogOut</a>
                    </li>

                    <form action="{{ route('logout') }}" method="POST" id="form-logout">@csrf</form>
                    
                    {{-- LOGOUT --}}
                </ul>
            @endauth
            @guest
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a href="{{ route('login') }}" class="btn btn-outline-success">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrati</a>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
