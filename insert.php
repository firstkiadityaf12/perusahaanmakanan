<?php

// mengkoneksikan
include 'penyambungan.php';

    $Nama_User = $_POST['nama'];
    $Alamat_User = $_POST['alamat'];
    $Email_User = $_POST['email'];
    $username = $_POST['username'];
    $Password = $_POST['password'];

// memasukan data
$query = "INSERT INTO user (nama,alamat,email,username,password) VALUES ('$Nama_User','$Alamat_User','$Email_User','$username','$Password')";

// menambhakan ke databasenya
$result = mysqli_query($connection,$query);

// menampilkan di databasenya
$num = mysqli_affected_rows($connection);

if ($num > 0 ) {
    header("location: indexx.php");
} else {
    echo "Data Gagal ditambahkan".mysqli_error($connection);
}

?>