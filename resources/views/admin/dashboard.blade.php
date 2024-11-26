<x-layout>
    <div class="container">
        <div class="row text-center align-items-center m-0 justify-content-center">
            <div class="col-10">
                <h2>
                    Bentornato, amministratore {{ Auth::user()->name }}
                </h2>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center fs-2">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <div class="row text-center align-items-center m-0 justify-content-center">
            <div class="col-10">
                <x-requests-table :roleRequests="$adminRequests" role="amministratore" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center align-items-center m-0 justify-content-center">
            <div class="col-10">
                <x-requests-table :roleRequests="$revisorRequests" role="revisore" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center align-items-center m-0 justify-content-center ">
            <div class="col-10">
                <x-requests-table :roleRequests="$writerRequests" role="redattore" />
            </div>
        </div>
    </div>


    <hr>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Indice categorie</h2>
                <form action="{{ route('admin.storeCategory') }}" method="POST" class="w-50 d-flex m-3">
                    @csrf
                    <input type="text" name="name" placeholder="Nuova categoria" class="form-control me-2">
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
                <x-metainfo-table :metaInfos='$categories' metaType='categorie' />
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-12">
                <h2>Indice Tag</h2>
                <x-metainfo-table :metaInfos='$tags' metaType='tags' />
            </div>
        </div>
    </div>

</x-layout>
