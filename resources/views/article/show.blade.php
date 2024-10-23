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
                    <img src="{{ Storage::url($article->image) }}" class="img-fluid img-thumbnail border-warning rounded shadow-lg my-5"
                        alt="Immagine dell'articolo: {{ $article->title }}">
                </div>
            </div>

            <div class="col-6">
                <div>
                    <p>{{ $article->body }}</p>
                </div>
            </div>

        </div>
    </div>

</x-layout>
