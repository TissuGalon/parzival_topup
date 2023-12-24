<?php
include 'koneksi.php';

$namaproduct = $_POST['namaproduct'];
$jenis = $_POST['jenis'];
$tipe = $_POST['tipe'];
$gambar = $_FILES["gambar"];
$apiid = $_POST['apiid'];
$status = 'tersedia';

$statusupload = "";


$targetDirectory = "../../images/product-images/";
$hasil = uploadGambar($gambar, $targetDirectory);
if ($hasil[0] == "success") {
    $namafile = $hasil[1];
    $query = mysqli_query($conn, "INSERT INTO product (nama_product, tipe, jenis, gambar, status, api_id) VALUES ('$namaproduct','$tipe','$jenis','$namafile','$status', '$apiid')");
    header("location:../index.php?x=local&status=success");
} elseif ($hasil[0] == "error") {
    $statusupload = "Upload Error";
    header("location:../index.php?x=local&status=error");
} else {
    echo $hasil;
}

?>