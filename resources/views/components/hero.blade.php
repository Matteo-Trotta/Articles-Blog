<div class="container-fluid my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12  text-center p-0">

            <section class="m-0 vh-50 ">
                <div class="container">
                    <h1 class="display-1">Blog Web Marketing</h1>
                    <p class="lead italic text-secondary">Home / Blog Web Marketing</p>
                    @auth
                        <a href="{{ route('article.create') }}" class="btn btn-warning my-2">Crea un Articolo</a>
                    @endauth
                    {{-- @guest


                        <a class="btn btn-warning shadow-md my-3" href="{{ route('register') }}">Registrazione Gratuita</a>
                    </div>
                @endguest --}}
                    <p class="lead text-break col-12 col-lg-10 mx-auto mb-4">
                        Il blog di web marketing consiste nell’utilizzo di un <strong>blog</strong> come
                        <strong>strumento strategico per un’azienda,</strong> i suoi prodotti o servizi. Grazie alla
                        <strong> pubblicazione regolare di articoli e all’interazione diretta con clienti e potenziali
                            clienti </strong>, un blog diventa un mezzo potente per instaurare relazioni, rafforzare la
                        propria reputazione e <strong>affermarsi come punto di riferimento in un determinato
                            settore</strong>.
                        <br><strong class="text-black fs-3">Vantaggi principali:</strong> incremento del traffico,
                        miglioramento del posizionamento SEO e coinvolgimento del pubblico.
                        Per ottenere risultati concreti, è fondamentale definire una <strong> strategia di contenuti
                        </strong>, pianificare un calendario editoriale,<strong>creare materiali di valore </strong>,
                        promuovere i contenuti e monitorare le performance per ottimizzare la propria attività di web
                        marketing.
                    </p>

            </section>

        </div>
    </div>
</div>
