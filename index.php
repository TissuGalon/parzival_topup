<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />

    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- CUSTOM CSS -->
    <style>

    </style>
    <!-- CUSTOM CSS -->
</head>

<body>


    <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 1) {
        header('location:admin/index.php');
    } ?>


    <!-- ISI HALAMAN -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- SIDEBAR -->
            <?php include 'sidebar.php'; ?>
            <!-- / SIDEBAR -->

            <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

            <!-- ISI -->
            <?php if (isset($_GET['x'])) {
                if ($_GET['x'] == 'home') {
                    include 'home.php';
                } elseif ($_GET['x'] == 'pencarian') {
                    include 'pencarian.php';
                } elseif ($_GET['x'] == 'riwayat') {
                    include 'riwayat.php';
                } elseif ($_GET['x'] == 'profil') {
                    include 'profil.php';
                }
            } else {
                echo '<script>window.location.href = "index.php?x=home"</script>';
            } ?>
            <!-- ISI -->

        </div>
    </div>
    <!-- ISI HALAMAN -->





    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboards-analytics.js"></script>
</body>

</html>