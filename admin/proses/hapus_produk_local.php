<?php
include 'koneksi.php';

$id = $_GET['id_product'];

$query = mysqli_query($conn, "DELETE FROM product WHERE id_product = $id");
header('location:../index.php?x=local&status=dihapus');
?>