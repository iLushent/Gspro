<?php
require 'koneksi.php';

$nama = $_POST["nama_produk"];
$harga = $_POST["harga"];
$foto = $_FILES['foto'];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];

$queery = mysqli_query($conn, "UPDATE produk SET
nama_produk = '$nama_produk',
harga = '$harga',
foto = '$foto',
stok = '$stok',

if($queery){
    echo '
    <script>
            alert("data berhasil diubah");
            window.location = "index.php";
        </script>
    ';
}