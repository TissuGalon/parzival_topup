<div class="layout-page">

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
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                aria-label="Search...">
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
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column ">
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