<div class="container-fluid m-0">
    <div class="row bg-dark">

        {{-- <div class="col-4 my-2 ">

            <div class="fs-5 fw-bold text-white">
                <i class="bi bi-calendar3"></i> {{ now()->format('l, d F Y') }} |
                <i class="bi bi-clock"></i> {{ now()->format('H:i') }}
            </div>

        </div> --}}

        <div class="col-9 my-2">


            <x-searchBar />

        </div>


        <div class="col-3 my-2">

            <div class="d-flex align-items-center justify-content-end">
                <a href="#" class="text-white">
                    <i class="bi bi-facebook "></i>
                </a>
                <a href="#" class="text-white">
                    <i class="bi bi-twitter-x mx-2"></i>
                </a>
                <a href="#" class="text-white">
                    <i class="bi bi-instagram "></i>
                </a>

            </div>

        </div>

    </div>
</div>
