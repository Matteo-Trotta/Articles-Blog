<nav class="navbar navbar-expand-lg bg-body-tertiary">




    <div class="container-fluid">



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active fs-2" href="{{ route('homepage') }}">HomePage</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link active fs-2" href="{{ route('article.index') }}">Index</a>
                </li>


                @auth
                
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link active fs-2" href="{{ route('admin.dashboard') }}">Dashboard admin</a>
                        </li>
                    @endif


                    <li class="nav-item">
                        <a class="nav-link active fs-2" href="{{ route('article.create') }}">Aggiungi Articolo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-2" href="{{ route('careers') }}">Careers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-2 text-warning" href="#">Benvenuto , {{ Auth::user()->name }}</a>
                    </li>
                    {{-- LOGOUT --}}
                    <li>
                        <a href="{{ route('homepage') }}" class="btn btn-outline-danger"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    </li>

                    <form action="{{ route('logout') }}" method="POST" id="form-logout">@csrf</form>

                    {{-- LOGOUT --}}
                </ul>
            @endauth


            @guest

                <ul class="navbar-nav mb-2 mb-lg-3">

                    <li class="nav-item mx-3 my-1">
                        <a href="{{ route('login') }}" class="btn btn-outline-success">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrati</a>
                    </li>



                </ul>
            @endguest


        </div>
    </div>
</nav>
