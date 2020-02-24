<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restoran-Ku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <!-- menyambungkan ke CSS -->
    <link rel="stylesheet" href="loginregister.css">
    <!-- favicon -->
    <link rel="Shortcut icon" href="icon.png">
</head>
<body>
<div class="box_register">
        <h1 style="text-align:center;text-size:70px">REGISTER</h1>
            <p style="text-align:center;font-size: 20px;">Silahkan Daftarkan Diri Anda</p>
        <form action="insert.php" method="POST" style="text-align:center">
        <!-- masukan nama -->
            <label>Nama</label>
            <input type="text" name="nama" class="form_register">
        <!-- masukan alamat -->
            <label>Alamat</label>
            <input type="text" name="alamat" class="form_register">
        <!-- masukan alamat email -->
            <label>Email</label>
            <input type="text" name="email" class="form_register">
        <!-- memasukan username -->
		    <label>Username</label>
		    <input type="text" name="username" class="form_register" >
        <!-- memasukan password -->
		    <label>Password</label>
		    <input type="password" name="password" class="form_register">
        <!-- tombol login -->
            <input type="submit" class="tombol_register" value="REGISTER">
            </form>
        </div>
    </body>
</html>