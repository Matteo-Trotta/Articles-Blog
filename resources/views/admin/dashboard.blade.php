<x-layout>



    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">

                <h2>
                    Bentornato , amministratore {Auth::user()->name}

                </h2>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-10">

                <x-requests-table :roleRequests="$adminRquests" role="amministratore" />

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-10">

                <x-requests-table :roleRequests="$revisorRquests" role="revisore" />

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-10">

                <x-requests-table :roleRequests="$writerRquests" role="redattore" />

            </div>
        </div>
    </div>

</x-layout>
