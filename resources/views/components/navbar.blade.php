<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-3">
        {{-- LOGO --}}
        <a class="navbar-brand mx-auto mx-lg-0" href="{{ route('homepage') }}">
            <img class="" src="{{ asset('storage/logo/marketing_blog_logo.webp') }}" alt="Logo" class="img-fluid"
                style="height:180px;">
        </a>

        {{-- TOGGLER --}}

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        

        <div class="collapse navbar-collapse" id="navbarText">

            {{-- LINKS --}}

            <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 text-center text-lg-start">

                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="{{ route('homepage') }}">Blog home page</a>
                </li>

                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="{{ route('article.index') }}">Index</a>
                </li>


                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="https://sitiwebromatrottamatteo.com/">SEO</a>
                </li>

                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="https://sitiwebromatrottamatteo.com/">Hosting</a>
                </li>

                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="https://sitiwebromatrottamatteo.com/">Landing Page</a>
                </li>

                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="https://sitiwebromatrottamatteo.com/">Sito Web Professionale</a>
                </li>

                <li class="n fs-3 av-item mx-1">
                    <a class="nav-link active" href="https://sitiwebromatrottamatteo.com/">Torna al sito</a>
                </li>
                @auth

                    @if (Auth::user()->is_writer)
                        <li class="nav-item mx-1 fs-3">
                            <a class="nav-link active" href="{{ route('article.create') }}">Aggiungi Articolo</a>
                        </li>
                    @endif

                    @if (Auth::user()->is_admin)
                        <li class="nav-item mx-1 fs-3">
                            <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
                        </li>
                    @endif
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item mx-1 fs-3">
                            <a class="nav-link active" href="{{ route('revisor.dashboard') }}">Dashboard Revisor</a>
                        </li>
                    @endif
                    @if (Auth::user()->is_writer)
                        <li class="nav-item mx-1 fs-3">
                            <a class="nav-link active" href="{{ route('writer.dashboard') }}">Dashboard Writer</a>
                        </li>
                    @endif

                    <li class="nav-item mx-1 fs-3">
                        <a class="nav-link active" href="{{ route('careers') }}">Careers</a>
                    </li>
                @endauth
            </ul>

            {{-- LOGOUT E UTENTE --}}
            @auth
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0 ms-lg-3">
                    <span class="navbar-text text-warning fs-5">Ciao, {{ Auth::user()->name }}</span>

                    <div class="rounded-circle overflow-hidden" style="width:50px; height:50px;">
                        <img class="img-fluid" src="{{ Storage::url(Auth::user()->profile_image) }}" alt="foto profilo">
                    </div>

                    <a href="{{ route('homepage') }}" class="btn btn-outline-danger"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>

                    <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
    </div>
</nav>
