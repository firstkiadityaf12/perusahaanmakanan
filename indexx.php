<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restoran-Ku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- favicon -->
    <link rel="Shortcut icon" href="icon.png">
</head>
<body>
<div class="box_login">
        <h1 style="text-align:center;text-size:70px">LOGIN</h1>
            <p style="text-align:center;font-size: 20px;">Silahkan Masukan Akun Anda</p>
        <form action="landing.html" method="POST" style="text-align:center">
        <!-- memasukan username -->
		    <label>Username</label>
		    <input type="text" name="username" class="form_login" placeholder="Enter Username">
        <!-- memasukan password -->
		    <label>Password</label>
		    <input type="password" name="password" class="form_login" placeholder="Enter Password">
        <!-- tombol login -->
		    <input type="submit" class="tombol_login" value="LOGIN">
            </form>
        </div>
</body>
</html>