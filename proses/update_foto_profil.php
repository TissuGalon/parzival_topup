<?php
include 'koneksi.php';

$id = $_SESSION['id_akun'];
$gambar = $_FILES['file_upload'];

$statusupload = "";

/* Hapus foto sebelumnya */
$q = mysqli_query($conn, "SELECT * FROM akun WHERE id_akun = $id");
$row = mysqli_fetch_array($q);
if ($row['foto'] != null || $row['foto'] != '') {
    $file_path = '../images/user-images/';
    if (file_exists($file_path . $row['foto'])) {
        unlink($file_path . $row['foto']);
    }
}

/* Update Foto */
$targetDirectory = "../images/user-images/";
$hasil = uploadGambar($gambar, $targetDirectory);
if ($hasil[0] == "success") {
    $namafile = $hasil[1];
    $query = mysqli_query($conn, "UPDATE akun SET foto = '$namafile' WHERE id_akun = $id");
    header("location:../index.php?x=profil&status=success");
} elseif ($hasil[0] == "error") {
    $statusupload = "Upload Error";
    header("location:../index.php?x=profil&status=error");
} else {
    $statusupload = $hasil;
    header("location:../index.php?x=profil&status=" . $statusupload);
}

?>