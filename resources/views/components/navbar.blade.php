<nav class="navbar navbar-expand-lg bg-primary-subtle">
    <div class="container-fluid fs-4">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <!-- Navbar Links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item ">
                    <a class="nav-link active " href="{{ route('homepage') }}">HomePage</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active " href="{{ route('article.index') }}">Index</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active " href="{{ ('https://sitiwebromatrottamatteo.com/') }}">torna al sito</a>
                </li>





                @auth



                    @if (Auth::user()->is_writer)
                        <li class="nav-item">
                            <a class="nav-link active " href="{{ route('article.create') }}">Aggiungi Articolo</a>
                        </li>
                    @endif

                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="nav-link active " href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                        </li>
                    @endif


                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link active " href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
                        </li>
                    @endif

                    @if (Auth::user()->is_writer)
                        <li class="nav-item">
                            <a class="nav-link active " href="{{ route('writer.dashboard') }}">Dashboard Writer</a>
                        </li>
                    @endif






                    <li class="nav-item">
                        <a class="nav-link active " href="{{ route('careers') }}">Careers</a>
                    </li>
                @endauth
            </ul>

            <!-- Navbar Right -->
            <div class="d-flex ms-auto align-items-center">
                @auth

                    <span class="navbar-text text-warning me-3 fs-5">
                        Ciao, {{ Auth::user()->name }}
                    </span>
                    @auth


                        <div class="" style="height:50px; width:50px">

                            <img class="img-fluid border rounded-circle" src="{{ Storage::url(Auth::user()->profile_image) }}"
                                alt="foto profilo">

                        </div>
                    @endauth
                    <a href="{{ route('homepage') }}" class="btn btn-outline-danger"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>

                    <form action="{{ route('logout') }}" method="POST" id="form-logout" style="display:none;">@csrf</form>

                @endauth

                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-success mx-1">Accedi</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary mx-1">Registrati</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
