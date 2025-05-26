<x-layout>

    <div class="container mt-5 mb-1 ">
        <div class="row text-center justify-content-center">
            <div class="col-12 rounded bg-danger mb-2">
                <h1 class="display-1 text-white">{{ $article->title }}</h1>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-12 col-lg-6">


                <img src="{{ Storage::url($article->image) }}"
                    class="img-fluid rounded img-thumbnail border-5 border-warning shadow-lg "
                    alt="Immagine dell'articolo: {{ $article->title }}">


            </div>

            <div class="col-10 col-lg-6 mt-3">

                <div class="my-3 border-3 border-bottom border-warning-subtle">
                    <h2 class="display-3 fw-semibold">{{ $article->subtitle }}</h2>
                </div>

                <div class="p-2 border-bottom border-3 border-warning-subtle">
                    <p>{{ $article->body }}</p>
                </div>

                {{-- BOTTONI DA REVISORE --}}
                @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row">
                            <div class="d-flex justify-content-evenly">

                                <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accetta articolo</button>
                                </form>

                                <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rifiuta articolo</button>
                                </form>


                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>

</x-layout>
