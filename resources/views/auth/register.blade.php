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
            <div class="col-4">

                <p class="fs-1 ">
                    Articles Blog ti aiuta a rimanere in contatto con i fatti della tua vita
                </p>

            </div>

            <div class="col-4">

                <form action="{{ route('register') }}" method="POST" class="shadow-lg rounded-3 p-4 my5" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">

                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>

                    </div>

                    <div class="form-group">
                        <label for="text">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="text">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname">
                        @error('surname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <label for="profile_image">Immagine Profilo</label>
                        <input type="file" class="form-control" id="profile_image" name="profile_image">
                        @error('profile_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-success p-2 my-2">Registrati</button>


                </form>


            </div>
        </div>
    </div>


</x-layout>
