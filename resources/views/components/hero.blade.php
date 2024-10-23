<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 border p-0">

            <section class="m-0 vh-50 bg-warning-subtle">
                <div class="container">
                    <h1>Benvenuto nel mio Blog</h1>
                    <p>Condividi le tue storie con il mondo.</p>
                    @auth
                        <a href="{{ route('article.create') }}" class="btn btn-warning my-2">Crea un Articolo</a>
                    @endauth
                    @guest


                        <a class="btn btn-warning shadow-md my-1" href="{{ route('register') }}">Registrati per creare
                            contenuti</a>
                    </div>
                @endguest
            </section>

        </div>
    </div>
</div>
