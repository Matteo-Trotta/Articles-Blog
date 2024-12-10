<div class="col-12 col-md-5 my-3">

    <div class="card p-2 text-center shadow-lg h-100">

        <img src="{{ Storage::url($article->image) }}" class="img-thumbnail img-fluid overflow-hidden card-img-top" alt="Foto dell'articolo">
        <div class="card-body">

            <h5 class="card-title">{{ $article->title }}</h5>

            <p class="card-text">{{ $article->subtitle }}</p>

            <p class=" card-text small text-muted my-o">

                @foreach ($article->tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>

            @if ($article->category)
                <p class="small text-danger fw-bold">Categoria:
                    <a href="{{ route('article.byCategory', $article->category) }}"
                        class="text-muted">{{ $article->category->name }}</a>
                </p>
            @else
                <p class="small text-muted">Nessuna categoria</p>
            @endif



            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Leggi</a>
        </div>

        <div class="card-footer text-body-secondary border-separate">
            <p>Redatto il: {{ $article->created_at->format('d/m/Y') }} <br> da:
                <a href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
            </p>



        </div>
    </div>

</div>
