<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Buku</title>
</head>

<style>
    form div{
        margin-bottom: 15px;
    }
</style>

<body>
    <div class="container">
        <h1 class="text-center my-5"> Edit Buku </h1>
        <form action="/book/{{$book->id}}" method="POST">
            @method('put')
            @csrf
            <div>
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" name="judul_buku" id="judul_buku" class="form-control" value="{{$book->judul_buku}}" required>
            </div>
            <div>
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="{{$book->penulis}}" required>
            </div>
            <div>
                <label for="genre" class="form-label">Kategori</label>
                <input type="text" name="genre" id="genre" class="form-control" value="{{$book->genre}}" required>
            </div>
            <div>
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{$book->penerbit}}" required>
            </div>
            <div>
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" id="tanggal_terbit" class="form-control" value="{{$book->tanggal_terbit}}" required>
            </div>
            <div>
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" value="{{$book->stok}}" required>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <div class="container">
                    <input class="btn btn-info" type="submit" name="submit" value="Update">
                </div>
                <div class="container">
                    <a class="btn btn-dark" href="/book">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>