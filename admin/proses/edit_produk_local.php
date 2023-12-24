<?php
include 'koneksi.php';

$id = $_GET['id'];

$namaproduct = $_GET['namaproduct'];
$jenis = $_GET['jenis'];
$tipe = $_GET['tipe'];
$apiid = $_GET['apiid'];
$status = $_GET['status'];

$query = mysqli_query($conn, "UPDATE product SET nama_product = '$namaproduct', tipe = '$tipe', jenis = '$jenis', status = '$status', api_id = '$apiid' WHERE id_product = $id ");
header("location:../index.php?x=local&status=diedit");

?>