<x-layout>

    <div class="container">
        <div class="row text-center">
            <div class="col-10">

                <h2>Register form</h2>

            </div>
        </div>
    </div>


    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">

            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="text">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
        </div>

        <div class="form-group">
            <label for="text">Cognome</label>
            <input type="text" class="form-control" id="cognome" placeholder="cognome" name="cognome">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="Password Confirmation"
                id="password" name="password_confirmation">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-layout>
