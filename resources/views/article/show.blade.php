<x-layout>

    <div class="container-fluid bg-danger-subtle text-center">
        <div class="row">
            <div class="col-12">

                <h1>{{ $article->title }}</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">

            <div class="col-6">


                <x-card />

            </div>


            <div class="col-6">

                <x-card />

            </div>

        </div>
    </div>

</x-layout>
