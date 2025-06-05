<x-layout>


    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif


    <x-topbar />


    <x-hero />
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center m-0 p-0 h-100">

            @foreach ($articles as $article)
                <x-article-card :article="$article" />
            @endforeach


        </div>
    </div>







</x-layout>
