<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'penyambungan.php';

// menagkap data yang dikirm dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($connection,"select * from user where username = '$username' and password ='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username ;
    $_SESSION['status'] = "login";
    header("location: landing.php");
} else {
    header("location: login.php?pesan=gagal");
}
?>