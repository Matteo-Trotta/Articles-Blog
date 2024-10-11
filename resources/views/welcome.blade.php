<x-layout>

    <div class="container">
        <div class="row text-center bg-warning p-2 my-2">
            <div class="col-12">
                <h1>Welcome</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
</x-layout>
