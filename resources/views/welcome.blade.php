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


    @foreach ($articles as $article)
        <div class="col-12 col-md-3 ">


            <x-article-card :article="$article" />


        </div>
    @endforeach







</x-layout>
