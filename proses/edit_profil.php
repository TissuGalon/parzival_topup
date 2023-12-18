<?php
include 'koneksi.php';

$id = $_SESSION['id_akun'];

$username = $_GET['username'];
$namalengkap = $_GET['namalengkap'];
$email = $_GET['email'];
$nohp = $_GET['nohp'];


$kueri = mysqli_query($conn, "UPDATE akun SET username = '$username', nama_lengkap = '$namalengkap', email = '$email', nohp = '$nohp' WHERE id_akun = $id");

header('location:../index.php?x=profil');

?>