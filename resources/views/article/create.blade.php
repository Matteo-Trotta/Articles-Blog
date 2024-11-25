<x-layout>

    <div class="container-fluid">
        <div class="row text-center justify-content-center my-5 p-5">

            <div class="col-5 me-5">
                <h2 class="fs-1 redglitch ">Pubblica il tuo Articolo</h2>
                <p>Inizia da qui per creare un nuovo articolo <br> Racconta la tua storia o/e articolo per entrare a far
                    parte della community di inserzionisti di "blogAulab" <br> | Sharing is caring |</p>

            </div>
            <div class="col-5">

                <form class="shadow-lg rounded-3 p-4 my-5" action="{{ route('article.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf


                    {{-- TITLE --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    {{-- SUBTITLE --}}
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sotto-titolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle"
                            value="{{ old('subtitle') }}">
                        @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    {{-- IMAGE --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image"
                            value="{{ old('image') }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    {{-- CATEGORY --}}
                    <div class="mb-3">

                        <label for="category" class="form-label">Categoria</label>

                        <select name="category" id="category" class="form-control chooseCategory">
                            <option selected disabled>Seleziona Categoria</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>

                    {{-- BODY --}}
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea name="body" class="form-control my-2" id="body ">{{ old('body') }}</textarea>
                    </div>
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">

                        <label for="tags" class="form-laber">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags"
                            value="{{ old('tags') }}">
                        <span class="small text-muted fst-italic">Dividi ogni tag con una virgola
                        </span>

                        @error('tags')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>


                    <button type="submit" class="button-49">

                        Inserisci articolo

                    </button>
                    <hr>
                    <a href="{{ route('homepage') }}" class="redglitch">Torna alla Home</a>
                </form>

            </div>
        </div>
    </div>



</x-layout>
