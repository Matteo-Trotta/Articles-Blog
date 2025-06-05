
<div class=" d-md-flex alig-items-center justify-content-center">

    <form action="{{ route('article.search') }}" method="GET" class="d-flex" role="search">

        <input type="search" name="query" class="form-control me-2" placeholder="Cerca articolo . . ." aria-label="Search">

        <button class="btn btn-outline-warning" type="submit">Cerca</button>

    </form>

</div>