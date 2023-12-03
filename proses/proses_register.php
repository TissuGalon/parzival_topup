<?php
include 'koneksi.php';

$username = $_POST['username'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$password = $_POST['password'];

$query1 = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
$query2 = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email'");
$query3 = mysqli_query($conn, "SELECT * FROM akun WHERE nohp = '$nohp'");

$cek1 = mysqli_num_rows($query1);
$cek2 = mysqli_num_rows($query2);
$cek3 = mysqli_num_rows($query3);

if ($cek1 > 0) {
    header("location:../register.php?status=username_used");
}
if ($cek2 > 0) {
    header("location:../register.php?status=email_used");
}
if ($cek3 > 0) {
    header("location:../register.php?status=nohp_used");
} else {
    $query_register = mysqi_query($conn, "INSERT INTO akun (username,nama_lengkap, email, nohp, password, level) VALUES ('$username','$namalengkap','$email','$nohp','$password',3)");
    header("location:../login.php?status=register_success");
}



?>