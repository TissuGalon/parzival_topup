<?php 
include 'koneksi.php';

$id = $_GET['id_product'];

$query = mysqli_query($conn, "DELETE FROM product WHERE id_product = $id");
header('location:../data-produk-local.php');
?>