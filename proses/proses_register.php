<?php
include 'koneksi.php';

$username = $_POST['username'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$query1 = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
$query2 = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email'");
$query3 = mysqli_query($conn, "SELECT * FROM akun WHERE nohp = '$nohp'");

$cek1 = mysqli_num_rows($query1);
$cek2 = mysqli_num_rows($query2);
$cek3 = mysqli_num_rows($query3);
$cek4 = 0;
if ($password1 != $password2) {
    $cek4 = 1;
}

if ($cek1 > 0) {
    header("location:../register.php?status=username_used");
}
if ($cek2 > 0) {
    header("location:../register.php?status=email_used");
}
if ($cek3 > 0) {
    header("location:../register.php?status=nohp_used");
}
if ($cek4 > 0) {
    header("location:../register.php?status=pass_notsame");
} else {
    $query_register = mysqli_query($conn, "INSERT INTO akun (username,nama_lengkap, email, nohp, password, level) VALUES ('$username','$namalengkap','$email','$nohp','$password1',3)");
    header("location:../login.php?status=register_success");
}



?>