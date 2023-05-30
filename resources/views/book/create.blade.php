<h1> Create Buku </h1>
<form action="/book/store" method="POST">
    @csrf
    <input type="text" name="judul_buku" placeholder="Judul Buku"><br>
    <input type="text" name="penulis" placeholder="Penulis "><br>
    <input type="text" name="genre" placeholder="Genre"><br>
    <input type="text" name="penerbit" placeholder="Penerbit"><br>
    <input type="date" name="tanggal_terbit" placeholder="Tanggal Terbit"><br>
    <input type="text" name="stok" placeholder="Stok"><br>
    <input type="submit" name="submit" value="Save">
</form>