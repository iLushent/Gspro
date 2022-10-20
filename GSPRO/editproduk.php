<?php

require 'koneksi.php';

$id = $_GET["id"];
$produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$id'")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateproduk.php" method="POST">
        <?php while($data = mysqli_fetch_array($produk)) : ?>
            <input type="hidden" name="id_produk" value="<?= $data["nama_produk"]; ?>">

            <label>Nama Produk</label>
            <input type="text" name="id_produk" class="form-control" value="<?= $data["nama_produk"]; ?>">

            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?= $data["harga"]; ?>">

            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= $data["stok"]; ?>">

            <label>Foto</label>
            <input type="text" name="foto" class="form-control" value="<?= $data["foto"]; ?>">

            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="<?= $data["deskripsi"]; ?>">

            <button type="submit">Tambah</button>

            <?php endwhile; ?>
    </form>
</body>
</html>