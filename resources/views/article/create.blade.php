<x-layout>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-5">
                <h2 class="bg-secondary fs-1 ">Crea il tuo Articolo</h2>
            </div>
            <div class="col-5">

                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- TITLE --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- SUBTITLE --}}
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sotto-titolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle"
                            value="{{ old('subtitle') }}">
                        @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- IMAGE --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image"
                            value="{{ old('image') }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- CATEGORY --}}
                    <div class="mb-3">

                        <label for="category" class="form-label">Categoria</label>

                        <select name="category" id="category" class="form-control">
                            <option selected disabled>Seleziona Categoria</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- BODY --}}
                    <div class="mb-3">
                        <label for="body" class="form-control">Corpo del testo</label>
                        <textarea name="body" class="form-control" id="body ">{{ old('body') }}</textarea>
                    </div>
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror



                    <button type="submit" class="btn btn-primary">Inserisci articolo</button>
                    <a href="{{ route('homepage') }}">Torna alla Home</a>
                </form>

            </div>
        </div>
    </div>



</x-layout>
