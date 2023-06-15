<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center"> Register </h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label"> Nama </label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Email Address </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"> Password </label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Register</button>
                            </div>
                        </div>
                        <div class="text-center mb-3 d-grid">
                            <a class="btn btn-dark" href="/login">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>