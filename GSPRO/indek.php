<?php

    require 'koneksi.php';
    $produk = mysqli_query($conn,"SELECT * FROM produk")


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
    <a href="tambahproduk.php">tambah produk</a>
    <table border="1" cellpadding="10" cellspacing="0"> 

        <tr>
            <th>No</th>
            <th>Nama produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>hapus dan edit</th>
        </tr>

        <?php $i = 1; ?>
        <?php while($prodak = mysqli_fetch_assoc($produk)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $prodak["nama_produk"]; ?></td>
            <td><?= $prodak["harga"]; ?></td>
            <td><img src="img/<?= $prodak["foto"]; ?>" width="50px"></td>
            <td><?= $prodak["stok"]; ?></td>
            <td><?= $prodak["deskripsi"]; ?></td>
            <td>
                <a href="hapusproduk.php?id= <?= $prodak["id_produk"];?>" onCLick="return confirm('anda yakin ingin menghapus produk ini?')">hapus</a>
                <a href="editproduk.php?id= <?= $prodak["id_produk"];?>">Edit</a>

            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>