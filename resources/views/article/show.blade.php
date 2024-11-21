<x-layout>

    <div class="container-fluid bg-danger-subtle text-center">
        <div class="row">
            <div class="col-12">
                <h1>{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-6">
                <div>
                    <img src="{{ Storage::url($article->image) }}"
                        class="img-fluid img-thumbnail border-warning rounded shadow-lg my-5"
                        alt="Immagine dell'articolo: {{ $article->title }}">
                </div>
            </div>

            <div class="col-6">
                <div>
                    <p>{{ $article->body }}</p>
                </div>

                {{-- BOTTONI DA REVISORE --}}
                @if (Auth::user && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row">
                            <div class="d-flex justify-content-evenly">
                                <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accetta articolo</button>
                                </form>

                                <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST') }}">@csrf

                                    <button class="btn btn-danger">Rifiuta articolo</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endif


            </div>

        </div>
    </div>

</x-layout>
