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
                    <li class="menu-item active">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
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
                            <!-- CAROUSEL -->
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card p-3">

                                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel"
                                        style="max-height: 350px; overflow:hidden; object-fit:cover;">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                                                aria-current="true"></li>
                                            <li data-bs-target="#carouselExample" data-bs-slide-to="1" class=""></li>
                                            <li data-bs-target="#carouselExample" data-bs-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="images/carousel-1.jpg"
                                                    style="height: auto; object-fit: contain;" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>First slide</h3>
                                                    <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue
                                                        pertinacia.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://wallpapers.com/images/hd/all-games-039svvvr7nt6qzmg.jpg"
                                                    style="height: auto; object-fit: cover;" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Second slide</h3>
                                                    <p>In numquam omittam sea.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100"
                                                    src="https://c4.wallpaperflare.com/wallpaper/363/13/252/valorant-killjoy-valorant-digital-art-artwork-digital-hd-wallpaper-preview.jpg"
                                                    style="height: auto; object-fit: cover;" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h3>Third slide</h3>
                                                    <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim
                                                        graeco mel no.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExample" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExample" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <!-- CAROUSEL -->

                            <!-- TITLE LAYANAN -->
                            <div class="row m-2">
                                <div class="col-12">
                                    <h4> <i class="bx bx-grid-alt m-1"></i> Layanan Kami</h4>
                                </div>
                            </div>
                            <!-- TITLE LAYANAN -->

                            <!-- LAYANAN -->
                            <div class="col-lg-12 col-md-4 col-12 order-1">
                                <div class="row">
                                    <?php
                                    $qlayanan = mysqli_query($conn, "SELECT * FROM product");
                                    while ($row1 = mysqli_fetch_array($qlayanan)) { ?>
                                        <!-- ITEM LAYANAN -->
                                        <div class="col-md-4 col-6">
                                            <a href="product-detail.php?<?php echo $row1['id_product'] ?>" class="card-link">
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img class="card-img card-img-left"
                                                                style="width: 100%; height: 100%; object-fit: cover;"
                                                                src="images/product-images/<?php echo $row1['gambar'] ?>"
                                                                alt="Card image">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">
                                                                    <?php echo $row1['nama_product'] ?>
                                                                </h5>
                                                                <p class="card-text"><small class="text-muted">
                                                                        <?php echo $row1['tipe'] ?>
                                                                    </small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- ITEM LAYANAN -->
                                    <?php } ?>


                                </div>
                            </div>
                            <!-- LAYANAN -->

                            <!-- PENCARIAN-->
                            <div class="col-lg-12 col-md-4 order-1">
                                <div class="card p-2 px-3">
                                    <div class="d-flex align-items-center">
                                        <i class="bx bx-search fs-4 lh-0"></i>
                                        <input type="text" class="form-control border-0 shadow-none"
                                            placeholder="Search..." aria-label="Search...">
                                    </div>
                                </div>
                            </div>
                            <!-- PENCARIAN-->

                            <!-- PILIHAN JENIS -->
                            <div class="col-lg-12 col-md-4 order-1 mb-4">
                                <div class="demo-inline-spacing">
                                    <button type="button" class="btn btn-outline-primary">Top Up Game</button>
                                    <button type="button" class="btn btn-outline-primary">Voucher</button>
                                    <button type="button" class="btn btn-outline-primary">Pulsa, Data &
                                        E-wallet</button>
                                </div>
                            </div>
                            <!-- PILIHAN JENIS -->


                            <!-- LAYANAN -->
                            <div class="col-lg-12 col-md-4 col-12 order-1">
                                <div class="row">

                                    <?php
                                    $qlayanan2 = mysqli_query($conn, "SELECT * FROM product");
                                    while ($row2 = mysqli_fetch_array($qlayanan2)) {
                                        ?>
                                        <!-- ITEM LAYANAN -->
                                        <div class="col-md-3 col-xl-2 col-6">
                                            <a href="product-detail.php?<?php echo $row2['id_product'] ?>" class="card-link">
                                                <div class="card mb-3">
                                                    <img class="card-img-top"
                                                        src="images/product-images/<?php echo $row2['gambar'] ?>"
                                                        alt="Card image cap" style="width: 100%; height: 100%;">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <h5 class="card-title">
                                                                <?php echo $row2['nama_product'] ?>
                                                            </h5>
                                                            <p class="card-text"><small class="text-muted">
                                                                    <?php echo $row2['tipe'] ?>
                                                                </small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- ITEM LAYANAN -->
                                    <?php } ?>



                                </div>
                            </div>



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