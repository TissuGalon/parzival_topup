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
        .carousel-inner {
            position: relative;
        }

        .blur-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            filter: blur(5px);
            /* You can adjust the blur amount */
            z-index: 1;
        }
    </style>
    <!-- CUSTOM CSS -->
</head>

<body>

    <?php
    if (!isset($_SESSION['id_akun'])) { ?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>

            Swal.fire({
                title: "Oops",
                text: "Login untuk melanjutkan",
                icon: "warning"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php";
                } else {
                    window.location.href = "index.php";
                }
            });

        </script>

    <?php }
    ?>


    <!-- ISI HALAMAN -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- SIDEBAR -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="images/logo.png"
                                style="width:40px;height:40px;  aspect-ratio:1/1; object-fit:cover;" alt="">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Parzival</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="pencarian.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-search"></i>
                            <div data-i18n="Analytics">Cari Pesanan</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="riwayat.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-history"></i>
                            <div data-i18n="Analytics">Riwayat</div>
                        </a>
                    </li>



                </ul>
            </aside>
            <!-- / SIDEBAR -->

            <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

            <!-- ISI -->
            <div class="layout-page">

                <!-- NAVBAR -->
                <?php include 'navbar.php'; ?>
                <!-- NAVBAR -->

                <!-- CONTENT -->
                <div class="content-wrapper">

                    <!-- ISI CONTENT -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">



                            <!-- CARD CARI TRANSAKSI -->
                            <div class="col-lg-12 mb-0 order-0">
                                <h4 class="fw-bold py-3 mb-4">Riwayat Transaksi Anda</h4>
                            </div>
                            <!-- CARD CARI TRANSAKSI -->


                            <!-- PENCARIAN -->
                            <div class="col-lg-12 col-md-4 mb-4 order-1">
                                <div class="card p-2 px-3">
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-search fs-4 lh-0"></i>
                                        <input type="text" class="form-control border-0 shadow-none"
                                            placeholder="Search..." aria-label="Search...">
                                    </div>
                                </div>
                            </div>
                            <!-- PENCARIAN -->


                            <!-- ITEM TRANSAKSI -->
                            <div class="col-12 order-2">
                                <a href="#" class="card-link">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-auto">
                                                <img class="card-img card-img-left"
                                                    style="width: 20vh; height: 20vh; object-fit: cover;"
                                                    src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png"
                                                    alt="Card image">
                                            </div>
                                            <div class="col">
                                                <div class="card-body">
                                                    <h4 class="card-title">Item Transaksi</h4>
                                                    <p class="card-text"><small class="text-muted">03/12/2023</small>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- ITEM TRANSAKSI -->
                            <!-- ITEM TRANSAKSI -->
                            <div class="col-12 order-2">
                                <a href="#" class="card-link">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-auto">
                                                <img class="card-img card-img-left"
                                                    style="width: 20vh; height: 20vh; object-fit: cover;"
                                                    src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png"
                                                    alt="Card image">
                                            </div>
                                            <div class="col">
                                                <div class="card-body">
                                                    <h4 class="card-title">Item Transaksi</h4>
                                                    <p class="card-text"><small class="text-muted">03/12/2023</small>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- ITEM TRANSAKSI -->
                            <!-- ITEM TRANSAKSI -->
                            <div class="col-12 order-2">
                                <a href="#" class="card-link">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-auto">
                                                <img class="card-img card-img-left"
                                                    style="width: 20vh; height: 20vh; object-fit: cover;"
                                                    src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png"
                                                    alt="Card image">
                                            </div>
                                            <div class="col">
                                                <div class="card-body">
                                                    <h4 class="card-title">Item Transaksi</h4>
                                                    <p class="card-text"><small class="text-muted">03/12/2023</small>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- ITEM TRANSAKSI -->





                        </div>
                    </div>
                    <!-- ISI CONTENT -->

                    <!-- FOOTER -->
                    <footer class="content-footer footer bg-footer-theme ">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column ">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <a href="#" target="_blank" class="footer-link fw-bolder">Muhammad Kholis</a>
                            </div>

                        </div>
                    </footer>
                    <!-- FOOTER -->

                    <div class="content-backdrop fade"></div>


                </div>
                <!-- CONTENT -->

            </div>
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