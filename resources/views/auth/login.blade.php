<x-layout>

    <div class="container">
        <div class="row text-center">
            <div class="col-10">

                <h2>LogIn form</h2>

            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row justify-content-center my-3">
            <div class="col-10">

                <form action="{{ route('login') }}" method="POST" class="shadow-lg rounded-3 p-4 my5">
                    @csrf

                    <div class="form-group">

                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                    </div>




                    <button type="submit" class="btn btn-primary p-2 my-2">Submit</button>

                    <p>Non sei registrato? <a href="{{ route('register') }}">Registrati</a></p>

                </form>

            </div>
        </div>
    </div>



</x-layout>
