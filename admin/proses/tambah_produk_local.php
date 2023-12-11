<?php
include 'koneksi.php';
include 'upload_gambar.php';

$namaproduct = $_POST['namaproduct'];
$jenis = $_POST['jenis'];
$tipe = $_POST['tipe'];
$status = 'tersedia';
$gambar = $_FILES["gambar"];

$statusupload = "";

if (isset($_POST['namaproduct'])) {
    
    $targetDirectory = "../../images/product-images/";
    $hasil = uploadGambar($gambar, $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        $query = mysqli_query($conn, "INSERT INTO product (nama_product, tipe, jenis, gambar, status) VALUES ('$namaproduct','$tipe','$jenis','$namafile','$status')");
        header("location:../data-produk-local.php?status=success");
    } elseif ($hasil[0] == "error") {
        $statusupload = "Upload Error";
        header("location:../data-produk-local.php?status=error");
    } else {
        $statusupload = $hasil;
    }

   
} else {
    echo "error";
    header("location:../data-produk-local.php?status=error");
}

?>