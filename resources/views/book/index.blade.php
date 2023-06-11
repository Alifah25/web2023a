<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Data Buku</title>
</head>
<body>
<h1> Data Buku Di Perpustakaan </h1>

<a href="/book/create">Tambah Buku</a>
<form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit"> Logout </button>
</form>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Judul Buku</td>
        <td>Penulis</td>
        <td>Kategori</td>
        <td>Penerbit</td>
        <td>Tanggal Terbit</td>
        <td>Stok</td>
        <td>Aksi</td>
    </tr>
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
            <a href="/book/{{$b->id}}/edit">Edit</a>
            <form action="/book/{{$b->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>   
</body>
</html>