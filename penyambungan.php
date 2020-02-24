<?php
$connection = mysqli_connect("localhost","root","","prsh_makanan");

// mengecek koneksi apakah tersambung
if (mysqli_connect_error()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}

?>