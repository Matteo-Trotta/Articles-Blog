<x-layout>

    <div class="container">
        <div class="row text-center">
            <div class="col-10 my-3">

                <h2>Register form</h2>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center my-3">
            <div class="col-10">

                <form action="{{ route('register') }}" method="POST" class="shadow-lg rounded-3 p-4 my5">
                    @csrf

                    <div class="form-group">

                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>

                    </div>

                    <div class="form-group">
                        <label for="text">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="form-group">
                        <label for="text">Cognome</label>
                        <input type="text" class="form-control" id="cognome" name="cognome">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" id="password"
                            name="password_confirmation">
                    </div>


                    <button type="submit" class="btn btn-success p-2 my-2">Submit</button>

                </form>

            </div>
        </div>
    </div>


</x-layout>
