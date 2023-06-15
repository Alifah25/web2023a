<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Buku</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4"> Data Buku Yang Ada </h1>
        <h4 class="text-center"> Gramedia Pustaka </h4>
            <div class="btn-group" role="group" aria-label="Basic example">
                <div class="col card-header">
                    <a class="btn btn-primary" href="/book/create">Tambah Buku</a>
                </div>
                
                        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                            @csrf
                            @method('DELETE')
                            <div class="col card-header">
                                <button class="btn btn-danger" type="submit"> Logout </button>
                            </div>
                        </form>
            </div>

                    <table class="table table-bordered table-striped text-center" method="POST">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Tanggal Terbit</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        @foreach($book as $b)
                        <tr>
                            <td>{{$b->id}}</td>
                            <td>{{$b->judul_buku}}</td>
                            <td>{{$b->penulis}}</td>
                            <td>{{$b->genre}}</td>
                            <td>{{$b->penerbit}}</td>
                            <td>{{$b->tanggal_terbit}}</td>
                            <td>{{$b->stok}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <div class="container">
                                        <a class="btn btn-primary" href="/book/{{$b->id}}/edit">Edit</a>
                                    </div>
                                    <div class="container">
                                        <form action="/book/{{$b->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
    </div>  
</body>
</html>