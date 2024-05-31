<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Informasi Penggajian</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']); 
  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  if(mysqli_num_rows($result) > 0){

    $data = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $data['username'];

    header("Location: admin/beranda.php");
    exit;
  } else {
    echo "Username atau password salah!";
  }
}
?>

    <div class="kotak-login">
        <h1>Login</h1>
        Silahkan Masukan Username dan Password
        <form action="" method="post" >
        <div class="label">
            Username
        </div>
        <input type="text" name="username" id="username" placeholder="Username">
        <div class="label">
            Password
        </div>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" name="login" value="Masuk">
        </form>
    </div>
</body>

</html>