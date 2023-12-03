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
                    <li class="menu-item active">
                        <a href="pencarian.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-search"></i>
                            <div data-i18n="Analytics">Cari Pesanan</div>
                        </a>
                    </li>
                    <li class="menu-item">
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

                            <!-- INFO -->
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card p-3 px-4">
                                    <div class="row">
                                        <div class="btn btn-primary disabled"><i class='bx bx-search'></i> Cari pesanan
                                            anda dengan menggunakan nomor invoice yang telah diberikan</div>
                                    </div>
                                </div>
                            </div>
                            <!-- INFO -->

                            <!-- CARD CARI PESANAN -->
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card mb-4">
                                    <h5 class="card-header">Cari Pesanan</h5>
                                    <div class="card-body">
                                        <form>
                                            <label for="defaultFormControlInput" class="form-label">Nomor
                                                Invoice</label>
                                            <div class="justify-content-between">

                                                <input type="text" required class="form-control" id="defaultFormControlInput"
                                                    placeholder="#123456" aria-describedby="defaultFormControlHelp">

                                                <input type="submit" value="Check" class="btn btn-primary m-2">

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- CARD CARI PESANAN -->

                    

                            <!-- CARD HASIL PENCARIAN -->
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card mb-4">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-header">Pesanan</h5>
                                        <h5 class="card-header">#Nomor Invoice</h5>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <h5 class="card-title">Detail Pesanan</h5>
                                        <p class="card-text">
                                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente perferendis dolores quisquam sequi reprehenderit ab quas hic id deleniti nulla. Deserunt, quia nam! Amet sapiente officia aut ad dolorum! Id.
                                        </p>
                                        <p class="card-text"><small class="text-muted">03/12/2023</small></p>
                                      </div>
                                </div>
                            </div>
                            <!-- CARD HASIL PENCARIAN -->





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
                                <a href="#" target="_blank"
                                    class="footer-link fw-bolder">Muhammad Kholis</a>
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