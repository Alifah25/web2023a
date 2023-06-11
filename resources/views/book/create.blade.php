<style>
    form div{
        margin-bottom: 15px;
    }
</style>

<h1> Create Buku </h1>
<form action="/book/store" method="POST">
    @csrf
    <div>
        <label for="judul_buku" class="form-label">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku" class="form-control" required>
    </div>
    <div>
        <label for="penulis" class="form-label">Penulis</label>
        <input type="text" name="penulis" id="penulis" class="form-control" required>
    </div>
    <div>
        <label for="genre" class="form-label">Kategori</label>
        <input type="text" name="genre" id="genre" class="form-control" required>
    </div>
    <div>
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" required>
    </div>
    <div>
        <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
        <input type="date" name="tanggal_terbit" id="tanggal_terbit" class="form-control" required>
    </div>
    <div>
        <label for="stok" class="form-label">Stok</label>
        <input type="text" name="stok" id="stok" class="form-control" required>
    </div>
    <input type="submit" name="submit" value="Save">
</form>

    
                