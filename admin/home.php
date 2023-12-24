<div class="layout-page">

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>
    <!-- NAVBAR -->

    <!-- CONTENT -->
    <div class="content-wrapper">

        <!-- ISI CONTENT -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                <?php
                $kueri1 = mysqli_query($conn, "SELECT * FROM akun");
                $cek1 = mysqli_num_rows($kueri1);
                $kueri2 = mysqli_query($conn, "SELECT * FROM product");
                $cek2 = mysqli_num_rows($kueri2);

                ?>

                <!-- LAYANAN -->
                <div class="col-lg-12 col-md-4 order-1">
                    <div class="row">
                        <!-- ITEM LAYANAN -->
                        <div class="col-md-4 col-6">
                            <a href="index.php?x=local" class="card-link">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <i class="bx bx-box"></i>
                                            <h5 class="ms-2">
                                                <?php echo $cek2; ?> Product
                                            </h5>
                                        </div>
                                        <h4>Jumlah Product</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- ITEM LAYANAN -->
                        <!-- ITEM LAYANAN -->
                        <div class="col-md-4 col-6">
                            <a href="index.php?x=akun" class="card-link">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <i class="bx bx-user"></i>
                                            <h5 class="ms-2">
                                                <?php echo $cek1; ?> User
                                            </h5>
                                        </div>
                                        <h4>Jumlah Akun User</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- ITEM LAYANAN -->


                    </div>
                </div>
                <!-- LAYANAN -->








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