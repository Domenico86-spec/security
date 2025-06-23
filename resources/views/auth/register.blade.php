<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <h1>Registrati</h1>
            </div>

        </div>

    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}">
                @csrf
                
                
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome utente</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"></label>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">

                </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>

                
            </form>

            </div>

        </div>

    </div>
</x-layout>