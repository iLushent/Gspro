<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah produk</title>
</head>
<body>
    <h1>Tambah produk</h1>
    <form action="simpanproduk.php" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama produk</label><br>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control">
        <br><br>

        <label for="harga">Harga</label><br>
        <input type="text" name="harga" id="harga" class="form-control">
        <br><br>
        
        <label for="foto">Foto</label><br>
        <input type="file" name="foto" id="foto" class="form-control">
        <br><br>

        <label for="stok">Stok</label><br>
        <input type="text" name="stok" id="stok" class="form-control">
        <br><br>


        <label for="deskripsi">Deskripsi</label><br>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        <br><br>

        
        <button type="submit" class="btn-tambah">Tambah produk</button>
    </form>
</body>
</html>