<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'konek.php';

// menagkap data yang dikirm dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query(cnct.php,"select * from admin where username = '$username' and password ='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $username ;
    $_SESSION['status'] = "login";
    header("location: admin/indexx.php");
} else {
    header("location: login.php?pesan=gagal");
}
?>