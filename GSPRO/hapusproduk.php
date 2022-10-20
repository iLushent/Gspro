<?php
require 'koneksi.php';

$id = $_GET["id"];

$query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id'");
  
if($query){
    echo '
        <script>
            alert("data berhasil dihapus");
            window.location = "index.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("data tidak berhasil dihapus");
            window.location = "tambaproduk.php";
        </script>
    ';
}

?>