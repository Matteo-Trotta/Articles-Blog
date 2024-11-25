<x-layout>

    <div class="container-fluid p-5 bg-secondary-subtle">
        <div class="row text-center">
            <div class="col-12">

                <h2 class="fs-1 bg-success">Articoli di : {{ $user->name }}</h2>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
                <div class="col-6 col-md-3">

                    <div class="card my-5">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top img-thumbnail"
                            alt="Immagine dell'articolo: {{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-subtitle">{{ $article->subtitle }}</p>
                            <a href="{{ route('article.byCategory',$article->category) }}">{{ $article->category->name }}</a>
                            <p class="small text-muted my-o">

                                @foreach ($article->tags as $tag )

                                #{{ $tag->name }}
                                    
                                @endforeach
                            </p>
                        </div>

                        <div class ="card-footer d-flex justify-content-between align-items-center">
                            

                            <a href="{{ route('article.show', $article) }}" class="btn btn-success">Leggi</a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>

</x-layout>
