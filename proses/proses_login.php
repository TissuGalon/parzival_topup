<?php
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email' AND password = '$password'");
$cek = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);
if ($cek > 0) {
    $_SESSION['id_akun'] = $row['id_akun'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['nohp'] = $row['nohp'];
    $_SESSION['level'] = $row['level'];
    header("location:../index.php?status=welcome");
} else {
    header("location:../login.php?status=gagal");
}



?>