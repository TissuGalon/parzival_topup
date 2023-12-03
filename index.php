<?php
include 'proses/koneksi.php';

if(!isset($_SESSION['level'])){
    header("location:home.php");
}else{
    if ($_SESSION['level'] == 1) {
        header("location:admin/admin.php");
    } elseif ($_SESSION['level'] == 2) {
        header("location:home.php");
    
    } elseif ($_SESSION['level'] == 3) {
        header("location:home.php");
    }
}


?>