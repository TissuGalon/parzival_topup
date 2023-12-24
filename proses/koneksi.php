<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "parzival_topup");
if (!$conn) {
    die("Koneksi Error");
}

include 'upload_gambar.php';


$iak_apikey = '54965761701b8990qd4s';
$iak_username = '085161787501';

?>