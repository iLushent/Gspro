<?php
require 'koneksi.php';

$nama = $_POST["nama_produk"];
$harga = $_POST["harga"];
$foto = $_FILES['foto'];
$stok = $_POST["stok"];
$deskripsi = $_POST["deskripsi"];


$query = mysqli_query($conn, "INSERT INTO produk VALUES(NULL, '$nama', '$harga', '$foto', '$stok', '$deskripsi')");



if($query){
    echo '
        <script>
            alert("data berhasil dikirim");
            window.location = "index.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("data tidak berhasil dikirim");
            window.location = "tambahproduk.php";
        </script>
    ';
}

?>