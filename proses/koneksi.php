<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "parzival_topup");
if(!$conn){
    die("Koneksi Error");
}
?>