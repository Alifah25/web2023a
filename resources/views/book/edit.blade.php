<style>
    form div{
        margin-bottom: 15px;
    }
</style>

<h1> Edit Buku </h1>
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
    <input type="submit" name="submit" value="update">
</form>
