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
        <div class="alert alert-success">
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
</x-layout>
